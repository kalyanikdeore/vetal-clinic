<?php

namespace App\Controllers;

use App\Models\CommonModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Pharmacy extends BaseController
{
    protected $CommonModel;

    public function __construct()
    {
        $this->CommonModel = new CommonModel();
    }

    public function index()
    {
        // =====================================================
        // SAVE PHARMACY BILL
        // =====================================================

        if ($this->request->getMethod() === 'post') {

            $pharmacyArray = $this->request->getPost();

            $this->CommonModel->insertData(
                'tbl_pharmacy_billing',
                $pharmacyArray
            );

            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Pharmacy bill generated successfully.'
            ]);
        }


        // =====================================================
        // GET ALL PATIENTS
        // =====================================================

        $data['patients'] = $this->CommonModel->getData(
            'tbl_patients'
        );
 // =====================================================
    // GET LOGGED-IN DOCTOR
    // =====================================================
   $doctorId = 1;

        $doctorResult = $this->CommonModel->checkWhere(
            'tbl_users',
            [
                'user_id' => $doctorId
            ]
        );

        $data['doctor'] = null;

        if (!empty($doctorResult)) {
            $data['doctor'] = $doctorResult[0];
        }


        // =====================================================
        // GET ALL OPD RECORDS
        // =====================================================

        $data['opdRecords'] = $this->getAllOPD(); 

        // =====================================================
        // LOAD VIEW
        // =====================================================

        return view(
            'admin/pharmacy-billing',
            $data
        );
    }

     private function getAllOPD()
    {
        return $this->CommonModel->getData('tbl_opd');
    }







public function getPatientOPD()
{
    $patientId = $this->request->getPost('patient_id');

    if (empty($patientId)) {
        return $this->response->setJSON([
            'status' => false,
            'data'   => []
        ]);
    }

    $db = \Config\Database::connect();

    $opdRecords = $db->table('tbl_opd o')
        ->select('
            o.opd_id,
            o.patient_id,
            o.opd_date,
            o.added_doctor,
            u.fullname AS doctor_name
        ')
        ->join(
            'tbl_users u',
            'u.user_id = o.added_doctor',
            'left'
        )
        ->where('o.patient_id', $patientId)
        ->orderBy('o.opd_date', 'DESC')
        ->orderBy('o.opd_id', 'DESC')
        ->get()
        ->getResultArray();

    $data = [];

    foreach ($opdRecords as $opd) {

        $opdCode = 'OPD-' .
            date('Y', strtotime($opd['opd_date'])) .
            '-' .
            str_pad(
                $opd['opd_id'],
                4,
                '0',
                STR_PAD_LEFT
            );

        $data[] = [

            'opd_id' => $opd['opd_id'],

            'opd_code' => $opdCode,

            'opd_date' => date(
                'd M Y',
                strtotime($opd['opd_date'])
            ),

            'added_doctor' => $opd['added_doctor'],

            'doctor_name' => $opd['doctor_name'] ?? ''

        ];
    }

    return $this->response->setJSON([
        'status' => true,
        'data'   => $data
    ]);
}


public function getOPDPrescription()
{
    $opdId = $this->request->getPost('opd_id');

    if (empty($opdId)) {
        return $this->response->setJSON([
            'status'  => false,
            'message' => 'OPD ID is required.',
            'data'    => []
        ]);
    }

    $db = \Config\Database::connect();

    $builder = $db->table('tbl_prescription p');

    $builder->select('
        p.prescription_id,
        p.opd_id,
        p.medicine_name,
        p.dosage,
        p.frequency,
        p.duration,
        p.timing,
        p.prescribed_qty,

        s.stock_id,
        s.quantity AS stock_quantity,
        s.selling_price
    ');

    $builder->join(
        'tbl_stocks s',
        'TRIM(s.medicine_name) = TRIM(p.medicine_name)',
        'left'
    );

    $builder->where('p.opd_id', $opdId);

    $builder->orderBy(
        'p.prescription_id',
        'ASC'
    );

    $query = $builder->get();

    $prescriptions = $query->getResultArray();

    $data = [];

    foreach ($prescriptions as $row) {

        $stockQuantity = (float) ($row['stock_quantity'] ?? 0);

        $sellingPrice = (float) ($row['selling_price'] ?? 0);

        $prescribedQty = (float) ($row['prescribed_qty'] ?? 0);

        // ==========================================
        // CALCULATE PER UNIT RATE
        // ==========================================

        $rate = 0;

        if ($stockQuantity > 0) {

            $rate = $sellingPrice / $stockQuantity;

        }

        // ==========================================
        // DEFAULT SALE QTY
        // Initially prescribed quantity
        // ==========================================

        $saleQty = $prescribedQty;

        // ==========================================
        // AMOUNT
        // ==========================================

        $amount = $saleQty * $rate;

        $data[] = [

            'prescription_id' => $row['prescription_id'],

            'opd_id' => $row['opd_id'],

            'medicine_name' => $row['medicine_name'],

            'dosage' => $row['dosage'],

            'frequency' => $row['frequency'],

            'duration' => $row['duration'],

            'timing' => $row['timing'],

            'prescribed_qty' => $prescribedQty,

            'stock_id' => $row['stock_id'],

            'stock_quantity' => $stockQuantity,

            'selling_price' => $sellingPrice,

            'rate' => $rate,

            'sale_qty' => $saleQty,

            'amount' => $amount

        ];
    }

    return $this->response->setJSON([
        'status' => true,
        'data'   => $data
    ]);
}

public function generatePrescriptionPDF()
{
    $db = \Config\Database::connect();

    /* =========================================================
       BILL DATA - PHARMACY BILLING PAGE
    ========================================================= */

    $opdId = $this->request->getPost('pb_opd_id');

    $data = [
        'bill' => [
            'pb_id'               => $this->request->getPost('pb_id'),
            'pb_bill_status'      => $this->request->getPost('pb_bill_status'),
            'pb_patient_id'       => $this->request->getPost('pb_patient_id'),
            'pb_patient_name'     => $this->request->getPost('pb_patient_name'),
            'pb_opd_id'           => $opdId,
            'pb_doctor_name'      => $this->request->getPost('pb_doctor_name'),
            'pb_subtotal'         => $this->request->getPost('pb_subtotal'),
            'pb_discount'         => $this->request->getPost('pb_discount'),
            'pb_tax'              => $this->request->getPost('pb_tax'),
            'pb_total_amount'     => $this->request->getPost('pb_total_amount'),
            'pb_payment_method'   => $this->request->getPost('pb_payment_method'),
            'pb_amount_received'  => $this->request->getPost('pb_amount_received'),
            'pb_payment_status'   => $this->request->getPost('pb_payment_status'),
            'pb_billing_notes'    => $this->request->getPost('pb_billing_notes'),
            'pb_created'          => date('Y-m-d')
        ],


        /* =====================================================
           PATIENT
        ===================================================== */

        'patient' => [
            'first_name'   => $this->request->getPost('pb_patient_name'),
            'last_name'    => '',
            'patient_code' => $this->request->getPost('pb_patient_id'),
            'age'          => '',
            'gender'       => '',
            'mobile'       => ''
        ],


        /* =====================================================
           OPD
        ===================================================== */

        'opd' => [
            'opd_id'    => $opdId,
            'diagnosis' => ''
        ],


        /* =====================================================
           MEDICINES
        ===================================================== */

        'medicines' => []
    ];


    /* =========================================================
       GET MEDICINES DIRECTLY FROM PHARMACY SELECTED OPD
       
       pb_opd_id -> tbl_prescription -> medicine_name
    ========================================================= */

    if (!empty($opdId)) {

        $medicines = $db->table('tbl_prescription')
            ->select('medicine_name')
            ->where('opd_id', $opdId)
            ->where('medicine_name !=', '')
            ->get()
            ->getResultArray();


        if (!empty($medicines)) {

            foreach ($medicines as $medicine) {

                $medicineName = trim(
                    $medicine['medicine_name'] ?? ''
                );

                if ($medicineName === '') {
                    continue;
                }

                $data['medicines'][] = [
                    'medicine_name' => $medicineName
                ];
            }
        }
    }


    /* =========================================================
       GENERATE PDF
    ========================================================= */

    $html = view(
        'admin/prescription_pdf',
        $data
    );


    $options = new \Dompdf\Options();

    $options->set(
        'isHtml5ParserEnabled',
        true
    );

    $options->set(
        'isRemoteEnabled',
        true
    );


    $dompdf = new \Dompdf\Dompdf(
        $options
    );


    $dompdf->loadHtml($html);

    $dompdf->setPaper(
        'A5',
        'portrait'
    );

    $dompdf->render();


    return $this->response
        ->setContentType('application/pdf')
        ->setBody(
            $dompdf->output()
        );
}







}