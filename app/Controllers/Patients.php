<?php

namespace App\Controllers;

use App\Models\CommonModel; 

class Patients extends BaseController
{
    public function __construct(){
        $this->CommonModel = new CommonModel(); 
        $session = session();
        $session = \Config\Services::session();
    }

    public function index()
    {
        if($this->request->getPost()){
            $patientArray = $this->request->getPost();

            $db = \Config\Database::connect();

            $patients = $db->table('tbl_patients');
            
            $patients =  $patients->selectMax('patient_id');
            $query = $patients->get();
            $row = $query->getRow();
            $lastId = $row->patient_id; 
        
            //$lastId = $this->CommonModel->getInsertID();
            $patientCode = 'VC-'.date('Y').'-'.$lastId+1;
            $patientArray += ['patient_code'=>$patientCode];
            // echo '<pre>';
            //print_r($patientCode);die;
            if($this->CommonModel->insertData('tbl_patients', $patientArray)){

            }
        }

        $data['patients'] = $this->CommonModel->getData('tbl_patients');
        return view('admin/patients',$data);
    }








    
//    public function OPD_consultation()
//     {
//         if ($this->request->getPost()) {

//             $opdArray = $this->request->getPost();

//             $this->CommonModel->insertData('tbl_opd', $opdArray);
//         }

//         $data['patients'] = $this->CommonModel->getData('tbl_patients');

//         return view('admin/OPD-consultation', $data);
//     }


  /* =====================================================
       OPD CONSULTATION + PRESCRIPTION
       ===================================================== */



    public function OPD_consultation()
    {
        $db = \Config\Database::connect();

        /*
        =====================================================
        GET PATIENT LIST
        =====================================================
        */

            $data['patients'] =
                $this->CommonModel->getData('tbl_patients');

    $data['stocks'] = $db->table('tbl_stocks')
        ->select('stock_id, medicine_name, medicine_code, generic_name, strength, unit')
        ->where('medicine_name !=', '')
        ->orderBy('medicine_name', 'ASC')
        ->get()
        ->getResultArray();
        /*
        =====================================================
        POST
        =====================================================
        */

        if ($this->request->getPost()) {

            /*
            =================================================
            1. OPD DATA
            =================================================
            */

            $opdData = [

                'patient_id' =>
                    $this->request->getPost('patient_id'),

                'visit_type' =>
                    $this->request->getPost('visit_type'),

                'bp_count' =>
                    $this->request->getPost('bp_count'),

                'pulse_count' =>
                    $this->request->getPost('pulse_count'),

                'temperature' =>
                    $this->request->getPost('temperature'),

                'spo2' =>
                    $this->request->getPost('spo2'),

                'weight' =>
                    $this->request->getPost('weight'),

                'sugar' =>
                    $this->request->getPost('sugar'),

                'symptoms' =>
                    $this->request->getPost('symptoms'),

                'diagnosis' =>
                    $this->request->getPost('diagnosis'),

                'treatment_advice' =>
                    $this->request->getPost('treatment_advice'),

                'doctor_notes' =>
                    $this->request->getPost('doctor_notes'),

                'followup_date' =>
                    $this->request->getPost('followup_date'),

                'consultation_fee' =>
                    $this->request->getPost('consultation_fee'),

                'payment_status' =>
                    $this->request->getPost('payment_status'),

                'prescription_instructions' =>
                    $this->request->getPost('prescription_instructions'),

                'reminder_type' =>
                    $this->request->getPost('reminder_type'),

                'reminder_date' =>
                    $this->request->getPost('reminder_date'),

                'notification' =>
                    $this->request->getPost('notification'),

                'opd_date' =>
                    date('Y-m-d'),

                // 'added_doctor' =>
                //     session()->get('user_id') ?? 0
            ];


            /*
            =================================================
            2. PRESCRIPTION ARRAYS
            =================================================
            */

            $medicineNames =
                $this->request->getPost('medicine_name');

            $dosages =
                $this->request->getPost('dosage');

            $frequencies =
                $this->request->getPost('frequency');

            $durations =
                $this->request->getPost('duration');

            $timings =
                $this->request->getPost('timing');


            // Make sure arrays
            $medicineNames =
                is_array($medicineNames)
                    ? $medicineNames
                    : [];

            $dosages =
                is_array($dosages)
                    ? $dosages
                    : [];

            $frequencies =
                is_array($frequencies)
                    ? $frequencies
                    : [];

            $durations =
                is_array($durations)
                    ? $durations
                    : [];

            $timings =
                is_array($timings)
                    ? $timings
                    : [];


            /*
            =================================================
            3. START TRANSACTION
            =================================================
            */

            $db->transBegin();

            try {

                /*
                =============================================
                4. SAVE OPD
                =============================================
                */

                $opdBuilder =
                    $db->table('tbl_opd');

                $opdBuilder->insert($opdData);


                /*
                =============================================
                CHECK OPD ERROR
                =============================================
                */

                $opdError = $db->error();

                if (!empty($opdError['code'])) {

                    throw new \Exception(
                        'tbl_opd insert failed: ' .
                        json_encode($opdError)
                    );
                }


                /*
                =============================================
                5. GET OPD ID
                =============================================
                */

                $opdId = $db->insertID();


                if (!$opdId) {

                    throw new \Exception(
                        'OPD ID was not generated.'
                    );
                }


                /*
                =============================================
                6. SAVE PRESCRIPTIONS
                =============================================
                */

                foreach (
                    $medicineNames
                    as $i => $medicineName
                ) {

                    $medicineName =
                        trim((string) $medicineName);


                    // Empty medicine skip
                    if ($medicineName === '') {
                        continue;
                    }


                    /*
                    =========================================
                    PRESCRIPTION DATA
                    =========================================
                    */

                    $prescriptionData = [

                        'opd_id' =>
                            $opdId,

                        'medicine_name' =>
                            $medicineName,

                        'dosage' =>
                            trim(
                                (string)
                                ($dosages[$i] ?? '')
                            ),

                        'frequency' =>
                            trim(
                                (string)
                                ($frequencies[$i] ?? '')
                            ),

                        'duration' =>
                            trim(
                                (string)
                                ($durations[$i] ?? '')
                            ),

                        'timing' =>
                            trim(
                                (string)
                                ($timings[$i] ?? '')
                            )
                    ];


                    /*
                    =========================================
                    INSERT PRESCRIPTION
                    =========================================
                    */

                    $prescriptionBuilder =
                        $db->table(
                            'tbl_prescription'
                        );

                    $prescriptionBuilder->insert(
                        $prescriptionData
                    );


                    /*
                    =========================================
                    CHECK PRESCRIPTION ERROR
                    =========================================
                    */

                    $prescriptionError =
                        $db->error();

                    if (
                        !empty(
                            $prescriptionError['code']
                        )
                    ) {

                        throw new \Exception(
                            'tbl_prescription insert failed: ' .
                            json_encode(
                                $prescriptionError
                            )
                        );
                    }
                }


                /*
                =============================================
                7. TRANSACTION STATUS
                =============================================
                */

                if (
                    $db->transStatus() === false
                ) {

                    throw new \Exception(
                        'Database transaction failed.'
                    );
                }


                /*
                =============================================
                8. COMMIT
                =============================================
                */

                $db->transCommit();


                /*
                =============================================
                9. SUCCESS
                =============================================
                */

                return redirect()
                    ->back()
                    ->with(
                        'success',
                        'OPD Consultation and Prescription saved successfully.'
                    );


            } catch (\Throwable $e) {

                /*
                =============================================
                ROLLBACK
                =============================================
                */

                $db->transRollback();


                log_message(
                    'error',
                    'OPD SAVE ERROR: ' .
                    $e->getMessage()
                );


                /*
                =============================================
                DEVELOPMENT ERROR
                =============================================
                */

                if (
                    ENVIRONMENT ===
                    'development'
                ) {

                    echo '<pre>';

                    echo "OPD SAVE ERROR\n";
                    echo "============================\n\n";

                    echo $e->getMessage();

                    echo "\n\nOPD DATA:\n";
                    print_r($opdData);

                    echo "\n\nMEDICINE DATA:\n";

                    print_r([
                        'medicine_name' =>
                            $medicineNames,

                        'dosage' =>
                            $dosages,

                        'frequency' =>
                            $frequencies,

                        'duration' =>
                            $durations,

                        'timing' =>
                            $timings
                    ]);

                    echo "\n\nDATABASE:\n";

                    print_r(
                        $db->query(
                            "SELECT DATABASE() AS database_name"
                        )->getRow()
                    );

                    echo "\n\nLAST QUERY:\n";

                    echo $db->getLastQuery();

                    echo '</pre>';

                    exit;
                }


                return redirect()
                    ->back()
                    ->with(
                        'error',
                        'Unable to save OPD consultation.'
                    );
            }
        }


        /*
        =====================================================
        LOAD OPD PAGE
        =====================================================
        */

        return view(
            'admin/OPD-consultation',
            $data
        );
    }


   


public function saveOPD()
{
    $db = \Config\Database::connect();
   
  $session = session();

if (!$session->get('is_logged')) {
    return $this->response->setJSON([
        'status' => false,
        'message' => 'Session login not found.'
    ]);
}

$doctorId = $session->get('user_id');

if (empty($doctorId)) {
    return $this->response->setJSON([
        'status' => false,
        'message' => 'Session found, but user_id is missing.'
    ]);
}

    $patientId = $this->request->getPost('patient_id');

    if (empty($patientId)) {
        return $this->response->setJSON([
            'status' => false,
            'message' => 'Please select a patient.'
        ]);
    }

    // Check patient
    $patient = $db->table('tbl_patients')
        ->where('patient_id', $patientId)
        ->get()
        ->getRow();

    if (!$patient) {
        return $this->response->setJSON([
            'status' => false,
            'message' => 'Patient not found.'
        ]);
    }

    /*
    =====================================================
    GET PAYMENT STATUS
    =====================================================
    */

$paymentStatus = trim(
    (string) $this->request->getPost('payment_status')
);

    /*
    =====================================================
    OPD DATA
    =====================================================
    */

    $opdData = [
        'patient_id' => $patientId,

        'visit_type' => $this->request->getPost('visit_type'),

        'bp_count' => $this->request->getPost('bp_count'),

        'pulse_count' => $this->request->getPost('pulse_count'),

        'temperature' => $this->request->getPost('temperature'),

        'spo2' => $this->request->getPost('spo2'),

        'weight' => $this->request->getPost('weight'),

        'sugar' => $this->request->getPost('sugar'),

        'symptoms' => $this->request->getPost('symptoms'),

        'diagnosis' => $this->request->getPost('diagnosis'),

        'treatment_advice' =>
            $this->request->getPost('treatment_advice'),

        'doctor_notes' =>
            $this->request->getPost('doctor_notes'),

        'followup_date' =>
            $this->request->getPost('followup_date'),

        'consultation_fee' =>
            $this->request->getPost('consultation_fee'),

        /*
        =============================================
        PAYMENT STATUS
        =============================================
        */

        'payment_status' => $paymentStatus,

        'prescription_instructions' =>
            $this->request->getPost('prescription_instructions'),

        'reminder_type' =>
            $this->request->getPost('reminder_type'),

        'reminder_date' =>
            $this->request->getPost('reminder_date'),

        'notification' =>
            $this->request->getPost('notification'),

        'opd_date' => date('Y-m-d'),
          'added_doctor' => $doctorId
    ];


    /*
    =====================================================
    MEDICINE ARRAYS
    =====================================================
    */

    $medicineNames =
        $this->request->getPost('medicine_name') ?? [];

    $dosages =
        $this->request->getPost('dosage') ?? [];

    $frequencies =
        $this->request->getPost('frequency') ?? [];

    $durations =
        $this->request->getPost('duration') ?? [];

    $timings =
        $this->request->getPost('timing') ?? [];


    /*
    =====================================================
    TRANSACTION
    =====================================================
    */

    $db->transBegin();

    try {

        /*
        =================================================
        SAVE OPD
        =================================================
        */

        $opdBuilder = $db->table('tbl_opd');

        $opdBuilder->insert($opdData);


        /*
        =================================================
        CHECK INSERT ERROR
        =================================================
        */

        $opdError = $db->error();

        if (!empty($opdError['code'])) {

            throw new \Exception(
                'tbl_opd insert failed: ' .
                json_encode($opdError)
            );
        }


        /*
        =================================================
        GET OPD ID
        =================================================
        */

        $opdId = $db->insertID();

        if (!$opdId) {

            throw new \Exception(
                'OPD ID was not generated.'
            );
        }


        /*
        =================================================
        SAVE PRESCRIPTION
        =================================================
        */

        if (is_array($medicineNames)) {

            foreach ($medicineNames as $i => $medicineName) {

                $medicineName =
                    trim((string)$medicineName);

                if ($medicineName === '') {
                    continue;
                }

                $prescriptionData = [

                    'opd_id' => $opdId,

                    'medicine_name' =>
                        $medicineName,

                    'dosage' =>
                        trim(
                            (string)($dosages[$i] ?? '')
                        ),

                    'frequency' =>
                        trim(
                            (string)($frequencies[$i] ?? '')
                        ),

                    'duration' =>
                        trim(
                            (string)($durations[$i] ?? '')
                        ),

                    'timing' =>
                        trim(
                            (string)($timings[$i] ?? '')
                        )
                ];

                $db->table('tbl_prescription')
                    ->insert($prescriptionData);

                $prescriptionError =
                    $db->error();

                if (!empty($prescriptionError['code'])) {

                    throw new \Exception(
                        'Prescription insert failed: ' .
                        json_encode($prescriptionError)
                    );
                }
            }
        }


        /*
        =================================================
        TRANSACTION CHECK
        =================================================
        */

        if ($db->transStatus() === false) {

            throw new \Exception(
                'Database transaction failed.'
            );
        }


        /*
        =================================================
        COMMIT
        =================================================
        */

        $db->transCommit();


        /*
        =================================================
        SUCCESS
        =================================================
        */

        return $this->response->setJSON([

            'status' => true,

            'message' =>
                'OPD Consultation saved successfully.',

            'opd_id' => $opdId,

            'payment_status' =>
                $paymentStatus
        ]);


    } catch (\Throwable $e) {

        $db->transRollback();

        log_message(
            'error',
            'OPD SAVE ERROR: ' .
            $e->getMessage()
        );

        return $this->response->setJSON([

            'status' => false,

            'message' =>
                $e->getMessage()
        ]);
    }
}




    function patient_history(){
        return view('admin/patient-history');
    }

    function medical_certificates(){
        return view('admin/medical-certificates');
    }

    function BP_patients(){
        return view('admin/BP-patients');
    }

    function sugar_patients(){
        return view('admin/sugar-patients');
    }

    function reminders(){
        return view('admin/reminders');
    }

    
}
