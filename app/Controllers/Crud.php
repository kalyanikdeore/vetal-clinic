<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Crud extends BaseController
{

    function __construct(){

        $this->CommonModel = new CommonModel();//object

    }

    public function create()
    {
        if($this->request->getPost()){

            $studArray = $this->request->getPost();
            //print_r($dataArray);die;

            $img = $this->request->getFile('photo');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }

            $studArray += ['photo'=>$newName];

            if($this->CommonModel->insertData('tbl_students', $studArray)){
                echo 'Successfully Saved';
                return redirect()->to('read');
            }

        }
        return view('crud/create');
    }


    function read(){

        $data['students'] = $this->CommonModel->getData('tbl_students');
        return view('crud/read', $data);
    }

    function delete($stud_id){

        if($this->CommonModel->deleteData('tbl_students', 'stud_id', $stud_id)){
                echo 'Successfully deleted';
                return redirect()->to('read');
        }
    }
    
    function edit($stud_id){

    if($this->request->getPost()){

            $studArray = $this->request->getPost();
            //print_r($studArray);die;

            $img = $this->request->getFile('photo');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }else{
                $newName = $this->request->getPost('oldphoto');
            }

            unset($studArray['oldphoto']);
            $studArray += ['photo'=>$newName];

            if($this->CommonModel->updateData('tbl_students', 'stud_id', $stud_id, $studArray)){
                echo 'Successfully Updated';
                return redirect()->to('read');
            }

        }

        $data['student'] = $this->CommonModel->getDataWhere('tbl_students', 'stud_id', $stud_id);
        return view('crud/edit', $data);
    }

}
