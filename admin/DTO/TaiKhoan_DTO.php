<?php
class TaiKhoan
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $MatKhau;
    var $TenHienThi;
    var $DiaChi;
    var $DienThoai;
    var $Email;
    var $BiXoa;
    var $MaLoaiTaiKhoan;

    public function __construct()
    {
        $this->MaLoaiTaiKhoan   = 0;
        $this->BiXoa            = 0;
    }
}