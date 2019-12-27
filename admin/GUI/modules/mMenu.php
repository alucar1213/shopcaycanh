<ul>
    <li><a href="index.php?a=1"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li><a href="index.php?a=2"><i class="fa fa-users"></i> Tài khoản</a></li>
    <li><a href="index.php?a=3"><i class="fa fa-clipboard-list"></i> Loại sản phẩm</a></li>
    <li><a href="index.php?a=4"><i class="fa fa-building"></i> Hãng sản phẩm</a></li>
    <li><a href="index.php?a=5"><i class="fas fa-gift"></i> Sản phẩm</a></li>
    <li><a href="index.php?a=6"><i class="fa fa-cart-arrow-down"></i> Đơn hàng</a></li>
</ul>

<?php 
	$a = 1;
	if(isset($_GET["a"])){
        $a = $_GET["a"];
    }

    switch($a){

        case 2:
            include_once 'ThemXoaSuaTaiKhoan.php';

            break;
        case 3:
            include_once 'ThemXoaSuaLoaiSanPham.php';

            break;
        case 4:
            include_once 'ThemXoaSuaHangSanPham.php';

            break;
        case 5:
            include_once 'ThemXoaSuaSanPham.php';

            break;
        case 6:
            include_once 'ChinhSuaDonHang.php';
            break;

        default:
    }
?>