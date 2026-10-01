<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PharmacyBilling extends BaseController
{
    protected $commonModel;

    public function __construct()
    {
        $this->commonModel = new \App\Models\CommonModel();
    }

    // =========================================================
    // GET ALL BILLING DATA
    // GET: pharmacybilling/getData
    // =========================================================
    public function getData()
    {
        $data = $this->commonModel->getData('tbl_pharmacybilling');

        return $this->response->setJSON([
            'status' => true,
            'message' => 'Pharmacy billing data fetched successfully',
            'data' => $data
        ]);
    }


    // =========================================================
    // GET BILLING DATA BY ID
    // GET: pharmacybilling/getDataWhere/{id}
    // =========================================================
    public function getDataWhere($id)
    {
        $data = $this->commonModel->getDataWhere(
            'tbl_pharmacybilling',
            'pb_id',
            $id
        );

        if (!empty($data)) {

            return $this->response->setJSON([
                'status' => true,
                'message' => 'Billing data fetched successfully',
                'data' => $data[0]
            ]);
        }

        return $this->response->setJSON([
            'status' => false,
            'message' => 'Billing record not found'
        ]);
    }


    // =========================================================
    // INSERT BILL
    // POST: pharmacybilling/insert
    // =========================================================
    public function insert()
    {
        $request = $this->request->getPost();

        $billNo = 'PH-' . date('YmdHis');

        $insertData = [

            'pb_bill_no' => $billNo,

            'pb_patient_id' => $request['pb_patient_id'] ?? '',
            'pb_patient_name' => $request['pb_patient_name'] ?? '',

            'pb_prescription_id' =>
                $request['pb_prescription_id'] ?? null,

            'pb_prescription_date' =>
                !empty($request['pb_prescription_date'])
                    ? $request['pb_prescription_date']
                    : null,

            'pb_doctor_name' =>
                $request['pb_doctor_name'] ?? null,

            'pb_subtotal' =>
                $request['pb_subtotal'] ?? 0,

            'pb_discount' =>
                $request['pb_discount'] ?? 0,

            'pb_tax' =>
                $request['pb_tax'] ?? 0,

            'pb_total_amount' =>
                $request['pb_total_amount'] ?? 0,

            'pb_payment_method' =>
                $request['pb_payment_method'] ?? 'Cash',

            'pb_amount_received' =>
                $request['pb_amount_received'] ?? 0,

            'pb_payment_status' =>
                $request['pb_payment_status'] ?? 'Pending',

            'pb_billing_notes' =>
                $request['pb_billing_notes'] ?? null,

            'pb_bill_status' =>
                $request['pb_bill_status'] ?? 'Draft',

            'pb_created_by' =>
                $request['pb_created_by'] ?? null
        ];


        $result = $this->commonModel->insertData(
            'tbl_pharmacybilling',
            $insertData
        );


        if ($result) {

            $insertId = $this->commonModel
                ->db
                ->insertID();

            return $this->response->setJSON([
                'status' => true,
                'message' => 'Pharmacy bill saved successfully',
                'id' => $insertId,
                'bill_no' => $billNo
            ]);
        }


        return $this->response->setJSON([
            'status' => false,
            'message' => 'Failed to save pharmacy bill'
        ]);
    }


    // =========================================================
    // UPDATE BILL BY ID
    // POST: pharmacybilling/update/{id}
    // =========================================================
    public function update($id)
    {
        $request = $this->request->getPost();

        $updateData = [

            'pb_patient_id' =>
                $request['pb_patient_id'] ?? '',

            'pb_patient_name' =>
                $request['pb_patient_name'] ?? '',

            'pb_prescription_id' =>
                $request['pb_prescription_id'] ?? null,

            'pb_prescription_date' =>
                !empty($request['pb_prescription_date'])
                    ? $request['pb_prescription_date']
                    : null,

            'pb_doctor_name' =>
                $request['pb_doctor_name'] ?? null,

            'pb_subtotal' =>
                $request['pb_subtotal'] ?? 0,

            'pb_discount' =>
                $request['pb_discount'] ?? 0,

            'pb_tax' =>
                $request['pb_tax'] ?? 0,

            'pb_total_amount' =>
                $request['pb_total_amount'] ?? 0,

            'pb_payment_method' =>
                $request['pb_payment_method'] ?? 'Cash',

            'pb_amount_received' =>
                $request['pb_amount_received'] ?? 0,

            'pb_payment_status' =>
                $request['pb_payment_status'] ?? 'Pending',

            'pb_billing_notes' =>
                $request['pb_billing_notes'] ?? null,

            'pb_bill_status' =>
                $request['pb_bill_status'] ?? 'Draft'
        ];


        $result = $this->commonModel->updateData(
            'tbl_pharmacybilling',
            'pb_id',
            $id,
            $updateData
        );


        if ($result) {

            return $this->response->setJSON([
                'status' => true,
                'message' => 'Pharmacy bill updated successfully',
                'id' => $id
            ]);
        }


        return $this->response->setJSON([
            'status' => false,
            'message' => 'Failed to update pharmacy bill'
        ]);
    }


    // =========================================================
    // DELETE BILL BY ID
    // POST: pharmacybilling/delete/{id}
    // =========================================================
    public function delete($id)
    {
        $result = $this->commonModel->deleteData(
            'tbl_pharmacybilling',
            'pb_id',
            $id
        );


        if ($result) {

            return $this->response->setJSON([
                'status' => true,
                'message' => 'Pharmacy bill deleted successfully'
            ]);
        }


        return $this->response->setJSON([
            'status' => false,
            'message' => 'Failed to delete pharmacy bill'
        ]);
    }
}