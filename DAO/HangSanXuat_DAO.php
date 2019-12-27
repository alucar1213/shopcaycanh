<?php
include_once 'DB.php';

class HangSanXuat_DAO// extends AnotherClass implements Interface
{
    public function DSXuatXu()
    {
        $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa FROM hangsanxuat WHERE BiXoa='0'";
        $db = new DB();
        $ketQua = $db->ExcuteQuery($sql);

        return $ketQua;
    }
    public function getXuatXu($MaHang)
    {
        $sql = "SELECT TenHangSanXuat FROM hangsanxuat WHERE MaHangSanXuat='.$MaHang.' and BiXoa='0'";
        $db = new DB();
        $ketQua = $db->ExcuteQuery($sql);
        $row = $ketQua->fetch_assoc();
        return $row['TenHangSanXuat'];
    }
}
