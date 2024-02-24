<?php

class UserModel extends Database
{
    public function Login($name)
    {
        $sql = "SELECT * FROM khach_hang WHERE tai_khoan = ?";
        return $this->pdo_query($sql,$name);
    }
}