<?php
class DonHang
{
    var $MaDonHang;
    var $NgayLap;
    var $TongThanhTien;
    var $MaTaiKhoan;
    var $MaTinhTrang;
    public function __construct()
    {
        $this->MaDonHang = "";
        $this->NgayLap = "";
        $this->TongThanhTien = 0;
        $this->MaDonHang = 0;
        $this->MaTinhTrang = 0;
    }

    /*Mã đơn hàng*/ 
    public function setMaDonHang($MaDonHang): void
    {
        $this->MaDonHang = $MaDonHang;
    }
    public function getMaDonHang()
    {
        return $this->MaDonHang;
    }
    /*Ngày lập*/
    public function setNgayLap($NgayLap): void
    {
        $this->NgayLap = $NgayLap;
    }
    public function getNgayLap()
    {
        return $this->NgayLap;
    }
    /*Tồng tiền*/ 
    public function setTongThanhTien($TongThanhTien): void
    {
        $this->TongThanhTien = $TongThanhTien;
    }
    public function getTongThanhTien()
    {
        return $this->TongThanhTien;
    }
    /*Mã tài khoản*/ 
    public function setMaTaiKhoan($MaTaiKhoan): void
    {
        $this->MaTaiKhoan = $MaTaiKhoan;
    }
    public function getMaTaiKhoan()
    {
        return $this->MaTaiKhoan;
    }
    /*Mã tình trạng*/ 
    public function setMaTinhTrang($MaTinhTrang): void
    {
        $this->MaTinhTrang = $MaTinhTrang;
    }
    public function getMaTinhTrang()
    {
        return $this->MaTinhTrang;
    }
}