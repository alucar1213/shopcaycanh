<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */

include_once __DIR__.'/../DAO/TaiKhoan_DAO.php';
include_once __DIR__.'/../DTO/TaiKhoan_DTO.php';


class TaiKhoanBUS
{
    public function LoadTatCaTaiKhoan()
	{
		$loadTK = new TaiKhoanDAO();

		$result = $loadTK->LoadTatCaTaiKhoan();

        $danhSachTaiKhoan = array();
        if ($result->num_rows > 0)
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $tk = new TaiKhoan();
                
                $tk->MaTaiKhoan     = $row['MaTaiKhoan'];
                $tk->TenDangNhap    = $row['TenDangNhap'];
                $tk->TenHienThi     = $row['TenHienThi'];
                $tk->DienThoai      = $row['DienThoai'];
                $tk->email          = $row['Email'];
                $tk->DiaChi         = $row['DiaChi'];
                $tk->LoaiTK         = $row['MaLoaiTaiKhoan'];
                $tk->MatKhau        = $row['MatKhau'];

                $danhSachTaiKhoan[] = $tk;
            }
        }
        return $danhSachTaiKhoan;
	}

    public function ThemTaiKhoan($tk){

        $tkDAO = new TaiKhoanDAO();
        if($tkDAO->CheckTaiKhoanTonTai($tk->TenDangNhap) == false) {
            $tkDAO->ThemTaiKhoan($tk);
        }

    }

    public function ChinhSua($tkUpdate){
        $tk = new TaiKhoanDAO();
        $tk->ChinhSua($tkUpdate);
    }

    public function XoaTaiKhoan($maTaiKhoan){
        $tk = new TaiKhoanDAO();
        $tk->XoaTaiKhoan($maTaiKhoan);
    }

    public function CheckTaiKhoanTonTai($tenDangNhap){
        $tk = new TaiKhoanDAO();
        return $tk->CheckTaiKhoanTonTai($tenDangNhap);
    }

    public function TongSoTaiKhoan(){
        $tk = new TaiKhoanDAO();
        return $tk->TongSoTaiKhoan();
    }
    public function getTenTaiKhoanTheoID($MaTaiKhoan){
        $tk = new TaiKhoanDAO();
        return $tk->getTenTaiKhoanTheoId($MaTaiKhoan);
    }
}