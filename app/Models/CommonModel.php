<?php

namespace App\Models;


use CodeIgniter\Model;

class CommonModel extends Model
{

    function checkWhere($table, $dataArray){
        return $this->db->table($table)->where($dataArray)->get()->getResult();
    }

    // ...
    function insertData($table, $dataArray){
        return $this->db->table($table)->insert($dataArray);
    }

    //select * from tbl_students
    function getData($table){
        return $this->db->table($table)->get()->getResult();
    }

    //delete * from tbl_students where stud_id=2
    function deleteData($table, $column, $value){
        return $this->db->table($table)->where($column, $value)->delete();
    }

    //select * from tbl_students where stud_id=2
    function getDataWhere($table, $column, $value){
        return $this->db->table($table)->where($column, $value)->get()->getResult();
    }

    function updateData($table, $column, $value, $studArray){
        return $this->db->table($table)->where($column, $value)->update($studArray);
    }

}
