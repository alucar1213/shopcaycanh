<?php
    include_once __DIR__.'/../../BUS/ChiTietDonHang_BUS.php';
    include_once __DIR__.'/../../BUS/SanPham_BUS.php';

    $MaDonHang = isset($_POST['id']) ? (string)$_POST['id'] : false;

    $load_chitiet = new ChiTietDonHang_BUS();
    $load_sanpham = new SanPham_BUS();

    $chitiet = $load_chitiet->LoadChiTietDonHangByMaDH($MaDonHang);
    $ct = new ChiTietDonHang();
    foreach ($chitiet as $ct)
    {         
        echo '
        <tr style="line-height: 40px;">
            <td><img width="40px" height="40px" src="admin/GUI/modules/upload/'. $load_sanpham->getUlrSanPham($ct->MaSanPham) .'"></td>
            <td class="name" style="width: 200px">'.$load_sanpham->getTenSanPham($ct->MaSanPham).'</td>
            <td class="price">'.$ct->GiaBan.'</td>
            <td><input type="number" min="1" step="1" class="quantity qty-text" value="'.$ct->SoLuong.'" style="width:50px;height: 30px;" disable></td>
            <td class="total_price">'.$ct->SoLuong * $ct->GiaBan.'</td>
        </tr>
        ';
    }
?>                   
