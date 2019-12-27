<?php
include_once __DIR__ . '/../DAO/HangSanXuat_DAO.php';
include_once __DIR__ . '/../DTO/HangSanXuat_DTO.php';

class HangSanXuat_BUS// extends AnotherClass implements Interface
{
    public $HSX;
    public function __construct()
    {
        $this->HSX = new HangSanXuat_DAO();
    }
    //lay ds xuat xu
    public function DSXuatXu()
    {
        $kq = $this->HSX->DSXuatXu();

        $dsXuatXu = array();
        if($kq->num_rows >0)
        {
            while ($row = $kq->fetch_assoc()) {
                $XuatXu = new HangSanXuat();
                $XuatXu->MaHangSanXuat = $row['MaHangSanXuat'];
                $XuatXu->TenHangSanXuat = $row['TenHangSanXuat'];
                $XuatXu->LogoURL = $row['LogoURL'];
                $XuatXu->BiXoa = $row['BiXoa'];
                $dsXuatXu[] = $XuatXu;
            }
        }
        else {
            return null;
        }
        return $dsXuatXu;
    }
    //lay xuat xu nang id
    public function getXuatXu($MaHang)
    {
        return $this->HSX->getXuatXu($MaHang);
    }
}
