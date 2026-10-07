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
        $data['pharmacyList'] = $this->getPharmacySales();

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
private function getPharmacySales()
{
    $db = \Config\Database::connect();

    return $db->table('tbl_opd o')
        ->select('
            o.opd_id,
            o.patient_id,
            o.opd_date,
            p.first_name,
            p.middle_name,
            p.last_name,
            p.mobile,
            COUNT(pr.prescription_id) AS medicine_count,
            GROUP_CONCAT(pr.medicine_name SEPARATOR ", ") AS medicine_names
        ')
        ->join(
            'tbl_patients p',
            'p.patient_id = o.patient_id',
            'left'
        )
        ->join(
            'tbl_prescription pr',
            'pr.opd_id = o.opd_id',
            'left'
        )
        ->groupBy('o.opd_id')
        ->orderBy('o.opd_id', 'DESC')
        ->get()
        ->getResult();
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
       1. GET OPD ID FROM PHARMACY BILLING
    ========================================================= */

    $opdId = $this->request->getPost('pb_opd_id');


    /* =========================================================
       2. BILL DATA
    ========================================================= */

    $bill = [
        'pb_id'              => $this->request->getPost('pb_id'),
        'pb_bill_status'     => $this->request->getPost('pb_bill_status'),
        'pb_patient_id'      => $this->request->getPost('pb_patient_id'),
        'pb_patient_name'    => $this->request->getPost('pb_patient_name'),
        'pb_opd_id'          => $opdId,
        'pb_doctor_name'     => $this->request->getPost('pb_doctor_name'),
        'pb_subtotal'        => $this->request->getPost('pb_subtotal'),
        'pb_discount'        => $this->request->getPost('pb_discount'),
        'pb_tax'             => $this->request->getPost('pb_tax'),
        'pb_total_amount'    => $this->request->getPost('pb_total_amount'),
        'pb_payment_method'  => $this->request->getPost('pb_payment_method'),
        'pb_amount_received' => $this->request->getPost('pb_amount_received'),
        'pb_payment_status'  => $this->request->getPost('pb_payment_status'),
        'pb_billing_notes'   => $this->request->getPost('pb_billing_notes'),
        'pb_created'         => date('Y-m-d')
    ];


    /* =========================================================
       3. GET OPD DATA
       
       pb_opd_id
          ↓
       tbl_opd.opd_id
          ↓
       patient_id
    ========================================================= */

    $opd = [];

    if (!empty($opdId)) {

        $opd = $db->table('tbl_opd')
            ->where('opd_id', $opdId)
            ->get()
            ->getRowArray();
    }


    /* =========================================================
   4. GET DOCTOR DATA
========================================================= */

$doctor = [];

if (!empty($opd['added_doctor'])) {

    $doctor = $db->table('tbl_users')
        ->where('user_id', $opd['added_doctor'])
        ->get()
        ->getRowArray();
}
    /* =========================================================
       4. GET PATIENT DATA FROM tbl_patients
       
       tbl_opd.patient_id
          ↓
       tbl_patients.patient_id
    ========================================================= */

    $patient = [];

    if (!empty($opd['patient_id'])) {

        $patient = $db->table('tbl_patients')
            ->where('patient_id', $opd['patient_id'])
            ->get()
            ->getRowArray();
    }


    /* =========================================================
       5. GET MEDICINES FROM tbl_prescription
       
       pb_opd_id
          ↓
       tbl_prescription.opd_id
    ========================================================= */

    $medicines = [];

    if (!empty($opdId)) {

        $medicines = $db->table('tbl_prescription')
            ->select('
                medicine_name,
                prescribed_qty,
                frequency,
                duration,
                timing
            ')
            ->where('opd_id', $opdId)
            ->where('medicine_name !=', '')
            ->orderBy('prescription_id', 'ASC')
            ->get()
            ->getResultArray();
    }
    


    /* =========================================================
       6. CLEAN MEDICINE DATA
    ========================================================= */

    $finalMedicines = [];

    if (!empty($medicines)) {

        foreach ($medicines as $medicine) {

            $medicineName = trim(
                (string)($medicine['medicine_name'] ?? '')
            );

            if ($medicineName === '') {
                continue;
            }

            $finalMedicines[] = [

                'medicine_name' =>
                    $medicineName,

                'prescribed_qty' =>
                    $medicine['prescribed_qty'] ?? '',

                'frequency' =>
                    $medicine['frequency'] ?? '',

                'duration' =>
                    $medicine['duration'] ?? '',

                'timing' =>
                    $medicine['timing'] ?? ''
            ];
        }
    }


    /* =========================================================
       7. OPD DATA FOR PDF
    ========================================================= */

    $opdData = [

        'opd_id' =>
            $opd['opd_id'] ?? $opdId,

        'patient_id' =>
            $opd['patient_id'] ?? '',

        'diagnosis' =>
            $opd['diagnosis'] ?? '',

        'symptoms' =>
            $opd['symptoms'] ?? '',

        'treatment_advice' =>
            $opd['treatment_advice'] ?? '',

        'doctor_notes' =>
            $opd['doctor_notes'] ?? '',

        'weight' =>
            $opd['weight'] ?? ''
    ];


    /* =========================================================
       8. FINAL PDF DATA
    ========================================================= */

    $data = [

        'bill' =>
            $bill,

        'patient' =>
            $patient,

                'doctor' =>
        $doctor,

        'opd' =>
            $opdData,

        'medicines' =>
            $finalMedicines
    ];


    /* =========================================================
       9. GENERATE PDF HTML
    ========================================================= */

    $html = view(
        'admin/prescription_pdf',
        $data
    );


    /* =========================================================
       10. DOMPDF
    ========================================================= */

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


    /* =========================================================
       11. RETURN PDF
    ========================================================= */

    return $this->response
        ->setContentType('application/pdf')
        ->setBody(
            $dompdf->output()
        );
}




}