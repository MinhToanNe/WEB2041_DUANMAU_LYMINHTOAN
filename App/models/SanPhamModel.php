<?php
class SanPhamModel extends Database
{
    public function create($name, $price, $salePrice, $image, $content, $category)
    {
        $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh,mo_ta,ma_loai) VALUES (?,?,?,?,?,?)";
        return $this->pdo_execute($sql, $name, $price, $salePrice, $image, $content, $category);
    }

    public function getAll()
    {
        $sql = "SELECT hh.*, l.ten_loai AS category 
        FROM hang_hoa hh
        INNER JOIN loai l ON hh.ma_loai = l.ma_loai
        ORDER BY hh.ma_hh ASC";
        return $this->pdo_query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM hang_hoa WHERE `ma_hh`=?";
       return $this->pdo_execute($sql,$id);

    }

    public function editSanPham($name, $price, $salePrice, $image, $content, $category)
    {
        $id = $_GET['id'];
        $sql = "UPDATE hang_hoa SET ten_hh = ?, don_gia = ?, giam_gia = ?, hinh = ?, mo_ta = ?, ma_loai = ?
                WHERE ma_hh = $id";
        return $this->pdo_execute($sql,$name, $price, $salePrice, $image, $content, $category);
    }

    public function getOneSanPham()
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM hang_hoa WHERE ma_hh = ?";
        return $this->pdo_query($sql,$id);
    }
}
