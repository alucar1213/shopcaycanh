<?php
include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';
?>
<h2>Danh sách hãng sản phẩm</h2>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Tên hãng</th>
        <th class="HinhSP">Logo hãng</th>
        <th>chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $loadHang = new HangSanXuat_BUS();

    $result = $loadHang->LoadTatCaCacHangSanXuat();

    foreach ($result as $loadHang){
        $url = $_DOMAIN.'/GUI/modules/upload/'.$loadHang->LogoURL;
        echo '
            <tr>
                <td>
                 <form method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" name="maHangSanPhamDel" id="maHangSanPhamDel" value="'.$loadHang->MaHangSanXuat.'">
                    <button id="Xoa" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
                <td><a>'.$loadHang->TenHangSanXuat.'</a></td>
                <td><img src="'.$url.'" alt="Card image cap" class="thumbnail img-responsive"></td>
                <td>
                
                    <div class="dropdown chinhsua">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chỉnh sửa</button>
                        <form id="form-chinh-sua-loai-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="form-group">
                                <input type="hidden" name="maHangSanPhamEdit" id="maHangSanPhamEdit" value="'.$loadHang->MaHangSanXuat.'">
                            </div>
                            <div class="form-group">
                                <span>Tên hãng</span>
                                <input type="text" name="tenHangSanPhamEdit" class="form-control" id="tenHangSanPhamEdit" value="'.$loadHang->TenHangSanXuat.'">
                            </div>
                            <div class="form-group">
                                <span>Logo hãng</span>
                                <input type="file" name="file-upload" id="file-upload" />
                            </div>
                            <button type="submit" id="chinhSua" class="btn btn-success">Chỉnh sửa</button>
                        </form>
                    </div>
                </td>
            </tr>
            ';
    }
    ?>
    </tbody>
</table>
</div>