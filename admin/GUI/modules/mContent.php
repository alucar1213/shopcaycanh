<?php
$a = 1;
if(isset($_GET["a"])){
    $a = $_GET["a"];
}
switch($a) {
    case 1:
        include_once 'pDashboard.php';
        break;
    case 2:
        include_once 'pDanhSachTaiKhoan.php';
        break;
    case 3:
        include_once 'pDanhSachSanPham.php';
        break;
    case 4:
        include_once 'pDanhSachHangSanPham.php';
        break;
    case 5:
        include_once 'pDanhSachSanPham.php';
        break;
    case 6:
        include_once 'pQuanLyDonHang.php';
        break;
    default:
        include_once 'pError.php';
}
?>