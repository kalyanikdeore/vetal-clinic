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
        // LOAD VIEW
        // =====================================================

        return view(
            'admin/pharmacy-billing',
            $data
        );
    }
}