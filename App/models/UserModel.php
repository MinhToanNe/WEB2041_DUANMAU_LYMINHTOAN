<?php

class UserModel extends Database
{
    public function Login($name)
    {
        $sql = "SELECT * FROM khach_hang WHERE tai_khoan = ?";
        return $this->pdo_query($sql,$name);
    }

    public function ressign($pass,$email,$user)
    {
        $sql = "INSERT INTO khach_hang(mat_khau,email,vai_tro,tai_khoan) VALUES(?,?,?,?)";
        return $this->pdo_execute($sql,$pass,$email,1,$user);
    }

    public function GetOneByEmail($email)
    {
        $sql = "SELECT * FROM khach_hang WHERE email = ?";
        return $this->pdo_query($sql,$email); 
    }
    public function GetAllUser()
    {
        $sql = "SELECT * FROM khach_hang";
        return $this->pdo_query($sql); 
    }

    public function delete()
    {
        $sql = "DELETE FROM khach_hang
                WHERE ma_kh = ? && vai_tro = ?";
        return $this->pdo_execute($sql,$_GET['id'],1);
    }

}