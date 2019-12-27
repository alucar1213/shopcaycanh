<?php
if(isset($_POST['MDHEdit']) && isset($_POST['tinhTrangDonHangEdit'])){
    if($_POST['MDHEdit'] == '' || $_POST['tinhTrangDonHangEdit'] == '' ){

    }
    else{
        if($_POST['tinhTrangDonHangEdit'] != 1 && $_POST['tinhTrangDonHangEdit'] != 2 && $_POST['tinhTrangDonHangEdit'] != 3){

        }
        else{
            include_once __DIR__.'/../../BUS/DonHang_BUS.php';
            include_once __DIR__.'/../../DTO/DonHang_DTO.php';
            $DH = new DonHang();
            $DH->MaDonHang = $_POST['MDHEdit'];
            $DH->MaTinhTrang = $_POST['tinhTrangDonHangEdit'];

            $DHEdit = new DonHang_BUS();
            $DHEdit->CapNhatTinhTrangDonHang($DH);
        }

    }
}
?>