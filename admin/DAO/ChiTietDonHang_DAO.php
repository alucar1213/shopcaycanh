<?php
    include_once 'DB.php';
    class ChiTietDonHang_DAO{
        public function loadChiTietHangByMaDH($MaDonHang){
            $sql = "SELECT * from chitietdonhang where MaDonDatHang = '$MaDonHang'";

            $db = new Database();
            $ketQua = $db->ExecuteQuery($sql);

            return $ketQua;
        }
    }
?>