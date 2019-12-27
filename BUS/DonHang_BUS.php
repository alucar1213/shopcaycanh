<?php
include_once __DIR__ . '/../DAO/DonHang_DAO.php';
include_once __DIR__ . '/../DTO/DonHang_DTO.php';

class DonHang_BUS
{
    public function LoadDonHangByMaKhachHang($MaKhachHang)
    {
        $LoadDH_MaKhachHang = new DonHang_DAO();

        $result = $LoadDH_MaKhachHang -> LoadDonHangByMaKhachHang($MaKhachHang);

        $danhSachDonHang = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dh = new DonHang();
                $dh->setMaDonHang($row['MaDonHang']);
                $dh->setMaTaiKhoan($row['MaTaiKhoan']);
                $dh->setMaTinhTrang($row['MaTinhTrang']);
                $dh->setNgayLap($row['NgayLap']);
                $dh->setTongThanhTien($row['TongThanhTien']);
                $danhSachDonHang[] = $dh; 
            }
        }

        return $danhSachDonHang;
    }

}

?>