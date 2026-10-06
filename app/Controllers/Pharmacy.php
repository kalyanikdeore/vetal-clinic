<?php

namespace App\Controllers;

use App\Models\CommonModel;

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




//     public function getPatientOPD()
// {
//     $patientId = $this->request->getPost('patient_id');

//     if (empty($patientId)) {
//         return $this->response->setJSON([
//             'status' => false,
//             'data'   => []
//         ]);
//     }

//     $db = \Config\Database::connect();

//     $opdRecords = $db->table('tbl_opd')
//         ->where('patient_id', $patientId)
//         ->orderBy('opd_date', 'DESC')
//         ->orderBy('opd_id', 'DESC')
//         ->get()
//         ->getResult();

//     $data = [];

//     foreach ($opdRecords as $opd) {

//         $opdCode = 'OPD-' .
//             date('Y', strtotime($opd->opd_date)) .
//             '-' .
//             str_pad($opd->opd_id, 4, '0', STR_PAD_LEFT);

//         $data[] = [
//             'opd_id'   => $opd->opd_id,
//             'opd_code' => $opdCode,
//             'opd_date' => date('d M Y', strtotime($opd->opd_date))
//         ];
//     }

//     return $this->response->setJSON([
//         'status' => true,
//         'data'   => $data
//     ]);
// }











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
            'message' => 'OPD ID is required',
            'data'    => []
        ]);

    }

    $db = \Config\Database::connect();

    $prescriptions = $db
        ->table('tbl_prescription')
        ->where('opd_id', $opdId)
        ->orderBy('prescription_id', 'ASC')
        ->get()
        ->getResult();

    return $this->response->setJSON([
        'status' => true,
        'data'   => $prescriptions
    ]);
}


}