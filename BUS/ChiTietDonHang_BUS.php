<?php
    include_once __DIR__ . '/../DAO/ChiTietDonHang_DAO.php';
    include_once __DIR__ . '/../DTO/ChiTietDonHang_DTO.php';
    
    class ChiTietDonHang_BUS{
        public function LoadChiTietDonHangByMaDH($MaDonHang){
            $load_ChiTiet = new ChiTietDonHang_DAO();
            
            $result = $load_ChiTiet->loadChiTietHangByMaDH($MaDonHang);

            $danhSachChiTiet = array();

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {           
                    $ChiTiet = new ChiTietDonHang();
                    $ChiTiet->MaChiTietDonDatHang = $row['MaChiTietDonDatHang'];
                    $ChiTiet->SoLuong = $row['SoLuong'];
                    $ChiTiet->GiaBan = $row['GiaBan'];
                    $ChiTiet->MaDonDatHang = $row['MaDonDatHang'];
                    $ChiTiet->MaSanPham = $row['MaSanPham'];

                    $danhSachChiTiet[] = $ChiTiet;
                }
            }

            return $danhSachChiTiet;
        }
    }
?>