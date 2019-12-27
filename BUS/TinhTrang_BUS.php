<?php
    include_once __DIR__ . '/../DAO/TinhTrang_DAO.php';
    include_once __DIR__ . '/../DTO/TinhTrang_DTO.php';


    class TinhTrang_BUS
    {
        public function LoadTenTinhTrang($MaTinhTrang)
        {
            $load_TenTinhTrang = new TinhTrang_DAO(); 
            $result = $load_TenTinhTrang->getTenTinhTrang($MaTinhTrang);
            $row = $result->fetch_assoc();
            return  $row['TenTinhTrang'];
        }
        
    }
?>