<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Stock extends BaseController
{

    public function __construct(){
        $this->CommonModel = new CommonModel(); 
        $session = session();
        $session = \Config\Services::session();
    }

    public function index()
    {
        if($this->request->getPost()){
            $stocksArray = $this->request->getPost();

            if($this->CommonModel->insertData('tbl_stocks', $stocksArray)){

            }
        }

        $data['stocks'] = $this->CommonModel->getData('tbl_stocks');
        return view('admin/stock-management',$data);
    }

}
