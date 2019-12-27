<?php
    include_once 'DB.php';
    class DonHang_DAO{

        public function LoadDonHangByMaKhachHang($MaKhachHang){
            $truyvan = 'select * from donhang where MaTaiKhoan ='.$MaKhachHang;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }

        public function LoadTatCaDonHang(){
            $truyvan = 'select * from donhang';

            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }
    }

?>