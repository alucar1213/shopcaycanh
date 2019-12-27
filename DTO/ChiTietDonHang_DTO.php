<?php
class ChiTietDonHang
{
    var $MaChiTietDonDatHang;
    var $SoLuong;
    var $GiaBan;
    var $MaDonDatHang;
    var $MaSanPham;
    public function __construct()
    {
        $this->MaChiTietDonDatHang = "";
        $this->MaDonDatHang = "";
        $this->GiaBan = 0;
        $this->SoLuong = 0;
        $this->MaSanPham = 0;
    }
}
?>