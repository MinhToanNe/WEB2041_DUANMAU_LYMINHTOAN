<?php
class LoaihangModel extends Database
{
    public function GetAllLoaiHang()
    {
        $stmt = "SELECT * FROM loai";
        $row =$this->pdo_query($stmt);
        return $row;

    }

    public function CreateLoaiHang($name)
    {
        $stmt = "INSERT INTO loai(`ten_loai`) VALUES (?)";
        $this->pdo_execute($stmt,$name);


    }
}