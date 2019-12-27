<?php
include_once __DIR__.'/../DAO/TaiKhoan_DAO.php';
//include_once './DTO/TaiKhoan_DTO.php';
    class TaiKhoan_BUS{
        public $taiKhoan;
        public function __construct()
        {
            $this->taiKhoan = new TaiKhoan_DAO();
        }
        public function GetUserInfo($username)
        {
            return $this->taiKhoan->GetUserInfo($username);
        }
        public function checkUsername($tenDangNhap)
        {
            return $this->taiKhoan->checkUsername($tenDangNhap);
        }
        //tra ve so luong tai khoan trung username va mk
        public function checkAccount($tenDangNhap, $MatKhau)
        {
            return $this->taiKhoan->checkAccount($tenDangNhap, $MatKhau);
        }

        //Kiem tra tk admin
        public function checkAdmin($tenDangNhap, $MatKhau)
        {
            return $this->taiKhoan->checkAdmin($tenDangNhap, $MatKhau);
        }
        //them tk nguoi dung
        public function AddTK($taiKhoan)
        {
            return $this->taiKhoan->AddTK($taiKhoan);
        }
        //ten nguoi dung
        public function getName($tenDangNhap)
        {
            return $this->taiKhoan->getName($tenDangNhap);
        }
        //update tk
        public function UpdateTK($tk)
        {
            return $this->taiKhoan->UpdateTK($tk);
        }
    }
?>