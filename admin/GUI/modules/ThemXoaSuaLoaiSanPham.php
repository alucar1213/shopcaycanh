<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loại mới</button>
    <form id="form-them-loai-san-pham" method="post" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên loại sản phẩm </span>
            <input type="text" class="form-control" name="tenLoaiSanPham" id="tenLoaiSanPham" placeholder="Tên loại sản phẩm">
        </div>
        <button type="submit" name="Them" id="themLoaiSanPham" class="btn btn-success">Thêm</button>
    </form>
</div>

<?php
////////////////////////thêm
    if(isset($_POST['tenLoaiSanPham'])){
        if($_POST['tenLoaiSanPham'] == ''){

        }
        else{
            include_once __DIR__.'/../../DTO/LoaiSanPham_DTO.php';
            include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';


///////////////////////Thêm sản phẩm mới////////////////////////////////////////

            $loai = new LoaiSanPham();
            $loai->TenLoaiSanPham = $_POST['tenLoaiSanPham'];

            $loai_BUS = new LoaiSanPham_BUS();
            $result = $loai_BUS->ThemLoaiSanPham($loai);
        }
    }
?>

<?php
////////////////////////////sửa

if(isset($_POST['tenLoaiSanPhamEdit']) && isset($_POST['maLoaiSanPhamEdit'])){
    if($_POST['tenLoaiSanPhamEdit'] == '' && $_POST['maLoaiSanPhamEdit'] == ''){

    }
    else{
        include_once __DIR__.'/../../DTO/LoaiSanPham_DTO.php';
        include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';

        $loai = new LoaiSanPham();
        $loai->MaLoaiSanPham = $_POST['maLoaiSanPhamEdit'];
        $loai->TenLoaiSanPham = $_POST['tenLoaiSanPhamEdit'];

        $loai_BUS = new LoaiSanPham_BUS();
        $loai_BUS->ChinhSua($loai);
    }
}
?>


<?php
///////////////////////////xóa
    if (isset($_POST['maLoaiSanPhamDel'])){
        if($_POST['maLoaiSanPhamDel'] == ''){

        }
        else{

            include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';
            $loai_BUS = new LoaiSanPham_BUS();

            $loai_BUS->XoaLoaiSanPham($_POST['maLoaiSanPhamDel']);
        }
    }
?>
