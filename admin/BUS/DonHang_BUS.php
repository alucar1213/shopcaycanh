<?php
/**
 * Created by PhpStorm.
 * User: phuon
 *
 */
include_once __DIR__.'/../DAO/DonHang_DAO.php';
include_once __DIR__.'/../DTO/DonHang_DTO.php';

class DonHang_BUS
{
    public function LoadTatCaCacDonHang()
    {
        $LoadDH = new DonHangDAO();
        $result = $LoadDH->LoadTatCaCacDonHang();

        $lstDonHang = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dh = new DonHang();
                $dh->MaDonHang = $row['MaDonHang'];
                $dh->MaTaiKhoan = $row['MaTaiKhoan'];
                $dh->MaTinhTrang = $row['MaTinhTrang'];
                $dh->NgayLap = $row['NgayLap'] ;
                $dh->TongThanhTien = $row['TongThanhTien'];
                $lstDonHang[] = $dh;
            }
        }

        return $lstDonHang;
   }
   public function CapNhatTinhTrangDonHang($donHang){
        $dhang = new DonHangDAO();
        $dhang->CapNhatTinhTrangDonHang($donHang);
   }
}
?>