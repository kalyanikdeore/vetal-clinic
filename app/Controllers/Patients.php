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




    function OPD_consultation(){

        if($this->request->getPost()){
            $opdArray = $this->request->getPost();

            if($this->CommonModel->insertData('tbl_opd', $opdArray)){

            }
        }

        // $data['patients'] = $this->CommonModel->getData('tbl_opd');
            $data['patients'] = $this->CommonModel->getData('tbl_patients');

        return view('admin/OPD-consultation');
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
