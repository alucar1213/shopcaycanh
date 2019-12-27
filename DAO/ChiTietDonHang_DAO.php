<?php
    include_once 'DB.php';
    class ChiTietDonHang_DAO{
        public function loadChiTietHangByMaDH($MaDonHang){
            $sql = "SELECT* from chitietdonhang where MaDonDatHang = '$MaDonHang'";

            $db = new DB();
            $ketQua = $db->ExcuteQuery($sql);

            return $ketQua;
        }
    }
?>