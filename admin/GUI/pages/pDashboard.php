<?php
include_once __DIR__.'/../../BUS/SanPham_BUS.php';
include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
?>
<h1>Dashboard</h1>
<h6>Bảng thống kê chung</h6>
<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Tổng số tài khoản đã đăng ký</th>
        <th scope="col">Tổng số hãng sản phẩm</th>
        <th scope="col">Tổng số loại sản phẩm</th>
        <th scope="col">Tổng số sản phẩm hiện có</th>
        <th scope="col">Tổng số lượt xem</th>
        <th scope="col">Tổng số lượng bán ra</th>
        <th scope="col">Tổng số lượng tồn</th>
    </thead>
    <tbody>
        <tr>
            <td id="tongtaikhoan">
                <?php
                    include_once __DIR__.'/../../BUS/TaiKhoan_BUS.php';
                    $tk = new TaiKhoanBUS();
                    echo $tk->TongSoTaiKhoan()['TongSoTaiKhoan'];
                ?>
            </td>
            <td id="tonghang">
                <?php
                include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
                $hang = new HangSanXuat_BUS();
                echo $hang->TongSoHangSanXuat()['TongSoHangSanXuat'];
                ?>
            </td>
            <td id="tongloai">
                <?php
                include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
                $loai = new LoaiSanPham_BUS();
                echo $loai->TongSoLoaiSanPham()['TongSoLoaiSanPham'];
                ?>
            </td>
            <?php
            include_once __DIR__.'/../../BUS/SanPham_BUS.php';
            $sp = new SanPham_BUS();
            $slsp = $sp->SoLuongSanPham_TongBan_TongXem_TongTon()['TongSoSanPham'];
            $soluotxem = $sp->SoLuongSanPham_TongBan_TongXem_TongTon()['TongSoLuongXem'];
            $soluongban = $sp->SoLuongSanPham_TongBan_TongXem_TongTon()['TongSoLuongBan'];
            $soluongton = $sp->SoLuongSanPham_TongBan_TongXem_TongTon()['TongSoLuongTon'];
            echo'
            <td id="soluongsp">'.$slsp.'</td>
            <td id="soluotxem">'.$soluotxem.'</td>
            <td id="tongbanra">'.$soluongban.'</td>
            <td id="soluongton">'.$soluongton.'</td>
            ';
            ?>
        </tr>
    </tbody>
</table>
</div>
<canvas id="thongkechung" width="800" height="450"></canvas>

<h6>Bảng thống kê số lượng sản phẩm bán ra của 3 loại sản phẩm sen đá, xương rồng, tiểu cảnh</h6>
<div class="table-responsive">
<table class="table table-hover table-bordered">
    <thead>
        <th scope="col">Sen đá</th>
        <th scope="col">Xương rồng</th>
        <th scope="col">Tiểu cảnh</th>
    </thead>
    <tbody>
        <tr>
            <?php
            include_once __DIR__.'/../../BUS/SanPham_BUS.php';
            $sp = new SanPham_BUS();
            $senda = $sp->DataChartSenDa()['SenDa'];
            $xuongrong = $sp->DataChartXuongRong()['XuongRong'];
            $tieucanh = $sp->DataChartTieuCanh()['TieuCanh'];
            echo '
                <td id="senda">'.$senda.'</td>
                <td id="xuongrong">'.$xuongrong.'</td>
                <td id="tieucanh">'.$tieucanh.'</td>
            ';
            ?>
        </tr>
    </tbody>
</table>
</div>
<canvas id="pie-chart" width="800" height="450"></canvas>
