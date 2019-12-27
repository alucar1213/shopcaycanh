<?php
class TaiKhoan
{
    var $TenDangNhap;
    var $TenNguoiDung;
    var $MatKhau;
    var $DiaChi;
    var $Sdt;
    var $Email;
    var $BiXoa;
    var $LoaiTK;
    var $id;

    public function __construct()
    {
        $this->TenDangNhap = "";
        $this->MatKhau = "";
        $this->TenNguoiDung = "";
        $this->DiaChi = "";
        $this->Sdt = "";
        $this->Email = "";
        $this->BiXoa = 0;
        $this->LoaiTK= 1;
        $id = 0;
    }

}
