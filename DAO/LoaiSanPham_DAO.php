<?php
include_once 'DB.php';
// include_once __DIR__.'/../DTO/LoaiSanPham_DTO.php';

class LoaiSanPham_DAO// extends AnotherClass implements Interface
{
    public function getTenLoaiSanPham($MaLoai)
    {
        $sql = 'SELECT TenLoaiSanPham FROM loaisanpham WHERE MaLoaiSanPham='.$MaLoai;
        $db = new DB();
        $ketQua = $db->ExcuteQuery($sql);
        $row = $ketQua->fetch_assoc();
        return $row['TenLoaiSanPham'];
    }
    public function DSLoaiSanPham()
    {
        $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa FROM loaisanpham WHERE BiXoa = '0'";
        $db = new DB();
        $ketQua = $db->ExcuteQuery($sql);

        return $ketQua;
    }
}
