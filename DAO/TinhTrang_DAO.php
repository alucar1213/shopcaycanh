<?php
    include_once 'DB.php';
    class TinhTrang_DAO
    {

        public function getTenTinhTrang($MaTinhTrang)
        {
            $truyvan = 'select TenTinhTrang from tinhtrang where MaTinhTrang ='.$MaTinhTrang;
            $db = new DB();
            $ketQua = $db->ExcuteQuery($truyvan);

            return $ketQua;
        }
    }
?>