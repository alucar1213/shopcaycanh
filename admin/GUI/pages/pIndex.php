<div class="container-fluid">
    <!------header------------->
    <div class="header col-lg-12 col-md-12 col-sm-12">
        <?php
            include_once __DIR__.'/../modules/mHeader.php';
        ?>
    </div>
    <div class="row">
    <!------------nav----------------->

        <div class="nav col-md-3 col-sm-12 col-12 col-xs-12">
            <?php
                include __DIR__.'/../modules/mMenu.php';
            ?>
        </div>

        <!-----------------content--------------------->

        <div class="content col-md-9 col-sm-12 col-12 col-xs-12">
            <?php
                $a = 1;
                if(isset($_GET["a"])){
                    $a = $_GET["a"];
                }

                switch($a){
                    case 1:
                        include 'pDashboard.php';
                        break;
                    case 2:
                        include 'pDanhSachTaiKhoan.php';
                        break;
                    case 3:
                        include 'pDanhSachLoaiSanPham.php';
                        break;
                    case 4:
                        include 'pDanhSachHangSanPham.php';
                        break;
                    case 5:
                        include 'pDanhSachSanPham.php';
                        break;
                    case 6:
                        include 'pQuanLyDonHang.php';
                        include_once __DIR__.'/../modules/mChiTietDonHang.php';
                        break;
                    default:
                        include 'pError.php';
                }
            ?>
        </div>
    </div>
    <footer role="contentinfo">
        <p>caycanhstore &copy; 2019</p>
    </footer>
</div>