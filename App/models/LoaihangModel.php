<?php
class LoaihangModel extends Database
{
    public function GetAllLoaiHang()
    {
       $sql = "SELECT * FROM loai";
        $row =$this->pdo_query($sql);
        return $row;

    }

    public function CreateLoaiHang($name)
    {
       $sql = "INSERT INTO loai(`ten_loai`) VALUES (?)";
        $this->pdo_execute($sql,$name);


    }

    public function DeleteLoaiHang($id)
    {
       $sql = "DELETE FROM loai WHERE `ma_loai`=?";
       return $this->pdo_execute($sql,$id);


    }
    public function EditLoaiHang($name)
    {
        $id = $_GET['id'];
        $sql = "UPDATE loai SET ten_loai = ? WHERE ma_loai=?";
        return $this->pdo_execute($sql,$name,$id);
    }

    public function GetOneLoaiHang()
    {
       $sql = "SELECT * FROM loai WHERE ma_loai = ?";
        $id = $_GET['id'];
        $row = $this->pdo_query_one($sql, $id);
        return $row;
    }

}