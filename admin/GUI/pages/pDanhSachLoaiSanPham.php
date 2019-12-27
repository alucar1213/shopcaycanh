<?php
include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
?>
<h2>Danh sách loại sản phẩm</h2>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Tên loại sản phẩm</th>
        <th>chức năng</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $loadLoai = new LoaiSanPham_BUS();

    $result = $loadLoai->LoadTatCaCacLoaiSanPham();

    foreach ($result as $loadLoai){
        echo '
            <tr>
                <td>
                   <form method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8">
                    <input type="hidden" name="maLoaiSanPhamDel" id="maLoaiSanPhamDel" value="'.$loadLoai->MaLoaiSanPham.'">
                    <button id="Xoa" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                   </form>
                </td>
                <td><a>'.$loadLoai->TenLoaiSanPham.'</a></td>
                <td>
                    <div class="dropdown chinhsua">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chỉnh sửa</button>
                        <form id="form-chinh-sua-loai-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="form-group">
                                <input type="hidden" name="maLoaiSanPhamEdit" id="maLoaiSanPhamEdit" value="'.$loadLoai->MaLoaiSanPham.'">
                            </div>
                            <div class="form-group">
                                <span>Tên loại sản phẩm</span>
                                <input type="text" name="tenLoaiSanPhamEdit" class="form-control" id="tenLoaiSanPhamEdit" value="'.$loadLoai->TenLoaiSanPham.'">
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