<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm mới</button>
    <form id="form-them-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên sản phẩm </span>
            <input type="text" name="tenSanPham" class="form-control" id="tenSanPham" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <span>Hình ảnh sản phẩm </span>
            <input type="file" name="file-upload" id="file-upload" />
        </div>

        <div class="form-group">
            <span>Hãng sản xuất </span>
            <select class="custom-select" name="hangSanXuat">

                <?php
                include_once __DIR__.'/../../BUS/HangSanXuat_BUS.php';
                include_once __DIR__.'/../../DTO/HangSanXuat_DTO.php';

                $loadHang = new HangSanXuat_BUS();

                $result = $loadHang->LoadTatCaCacHangSanXuat();

                foreach ($result as $loadHang){
                    echo '
                        <option value="'.$loadHang->MaHangSanXuat.'">'.$loadHang->TenHangSanXuat.'</option>
                    ';
                }
                ?>

            </select>
        </div>

        <div class="form-group">
            <span>Loại sản phẩm </span>
            <select class="custom-select" name="loaiSanPham">

                <?php
                include_once __DIR__.'/../../BUS/LoaiSanPham_BUS.php';


                $loadLoai = new LoaiSanPham_BUS();

                $result = $loadLoai->LoadTatCaCacLoaiSanPham();

                foreach ($result as $loadLoai){
                    echo '
                        <option value="'.$loadLoai->MaLoaiSanPham.'">'.$loadLoai->TenLoaiSanPham.'</option>
                    ';
                }
                ?>

            </select>
        </div>

        <div class="form-group">
            <span>Giá sản phẩm </span>
            <input type="text" name="giaSanPham" class="form-control" id="giaSanPham" placeholder="Giá sản phẩm">
        </div>

        <div class="form-group">
            <span>Số lượng</span>
            <input type="text" name="soLuong" class="form-control" id="soLuong" placeholder="Số lượng">
        </div>
        <div class="form-group">
            <span>Mô tả </span>
            <input type="text" name="moTa" class="form-control" id="moTa" placeholder="Mô tả">
        </div>

        <button type="submit" id="themSanPham" class="btn btn-success">Thêm</button>
    </form>

</div>
<?php
if(isset($_POST['tenSanPham']) && isset($_POST['giaSanPham']) && isset($_POST['hangSanXuat']) && isset($_POST['soLuong']) && isset($_POST['loaiSanPham']) && isset($_FILES)){
    if($_POST['tenSanPham'] == '' || $_POST['giaSanPham'] == '' || $_POST['hangSanXuat'] == ''|| $_POST['soLuong'] == '' || $_POST['loaiSanPham'] == ''){

    }
    else {
        include_once __DIR__ . '/../../DTO/SanPham_DTO.php';
        include_once __DIR__ . '/../../BUS/SanPham_BUS.php';
        include_once __DIR__ . '/../../DTO/HangSanXuat_DTO.php';
        include_once __DIR__ . '/../../DAO/init.php';
//////////////
        function UploadHinhAnh()
        {
//sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
            $fileUpload = $_FILES['file-upload'];


            if ($fileUpload['name'] != null) {
                $filename = $fileUpload['tmp_name'];
//random tên file
                $random = RandomString(6);//random 6 ký tự
//chỉ cho phép upload file có size từ 50kB - 5MB
                $flagsize = CheckSize($fileUpload['size'], 5 * 1024, 5 * 1024 * 1024);

//chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
                $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

                $tenHinh = null;

                if ($flagsize == true && $flagextension == true) {

                    $tenHinh = $random . $fileUpload['name'];
                    $url = __DIR__.'/upload/';
                    $destination = $url . $tenHinh;//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

                    move_uploaded_file($filename, $destination);
                }

                return $tenHinh;
            }
        }

//random string
        function RandomString($length = 5)
        {
            $arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
            $arrCharacter = implode($arrCharacter, '');
            $arrCharacter = str_shuffle($arrCharacter);

            $result = substr($arrCharacter, 0, $length);
            return $result;
        }

//checksize của file, check định dạng file
        function CheckSize($size, $min, $max)
        {
            $flag = false;
            if ($size >= $min && $size <= $max) $flag = true;
            return $flag;
        }

        function CheckExtension($fileName, $arrExtension)
        {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $flag = false;
            if (in_array(strtolower($ext), $arrExtension) == true) $flag = true;
            return $flag;
        }

///////////////////////Thêm sản phẩm mới////////////////////////////////////////

        $sp = new SanPham();
        $sp->TenSanPham = $_POST['tenSanPham'];
        $sp->GiaSanPham = $_POST['giaSanPham'];
        $sp->MaHangSanXuat = $_POST['hangSanXuat'];
        $sp->SoLuongTon = $_POST['soLuong'];
        $sp->NgayNhap = date("Y/m/d");
        $sp->MoTa = $_POST['moTa'];
        $sp->HinhURL = UploadHinhAnh();
        $sp->MaLoaiSanPham = $_POST['loaiSanPham'];
        $sp_BUS = new SanPham_BUS();
        $result = $sp_BUS->ThemSanPham($sp);
    }
}
?>

<?php
if(isset($_POST['maSanPhamEdit']) && isset($_POST['tenSanPhamEdit']) && isset($_POST['giaSanPhamEdit'])  && isset($_POST['soLuongTonEdit']) && isset($_POST['ngayNhapEdit']) &&isset($_FILES)){

    if($_POST['tenSanPhamEdit'] == '' || $_POST['giaSanPhamEdit'] == '' || $_POST['maSanPhamEdit'] == ''|| $_POST['soLuongTonEdit'] == '' || $_POST['ngayNhapEdit'] == ''){

    }
    else {
        include_once __DIR__ . '/../../DTO/SanPham_DTO.php';
        include_once __DIR__ . '/../../BUS/SanPham_BUS.php';
        include_once __DIR__ . '/../../DTO/HangSanXuat_DTO.php';
        include_once __DIR__ . '/../../DAO/init.php';
//////////////
        function UploadHinhAnh()
        {
//sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
            $fileUpload = $_FILES['file-upload'];


            if ($fileUpload['name'] != null) {
                $filename = $fileUpload['tmp_name'];
//random tên file
                $random = RandomString(6);//random 6 ký tự
//chỉ cho phép upload file có size từ 50kB - 5MB
                $flagsize = CheckSize($fileUpload['size'], 5 * 1024, 5 * 1024 * 1024);

//chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
                $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

                $tenHinh = null;

                if ($flagsize == true && $flagextension == true) {

                    $tenHinh = $random . $fileUpload['name'];
                    $url = __DIR__.'/upload/';
                    $destination = $url . $tenHinh;//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

                    move_uploaded_file($filename, $destination);
                }

                return $tenHinh;
            }
        }

//random string
        function RandomString($length = 5)
        {
            $arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
            $arrCharacter = implode($arrCharacter, '');
            $arrCharacter = str_shuffle($arrCharacter);

            $result = substr($arrCharacter, 0, $length);
            return $result;
        }

//checksize của file, check định dạng file
        function CheckSize($size, $min, $max)
        {
            $flag = false;
            if ($size >= $min && $size <= $max) $flag = true;
            return $flag;
        }

        function CheckExtension($fileName, $arrExtension)
        {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $flag = false;
            if (in_array(strtolower($ext), $arrExtension) == true) $flag = true;
            return $flag;
        }

///////////////////////Thêm sản phẩm mới////////////////////////////////////////

        $sp = new SanPham();
        $sp->MaSanPham = $_POST['maSanPhamEdit'];
        $sp->TenSanPham = $_POST['tenSanPhamEdit'];
        $sp->GiaSanPham = $_POST['giaSanPhamEdit'];
        $sp->SoLuongTon = $_POST['soLuongTonEdit'];
        $sp->NgayNhap = $_POST['ngayNhapEdit'];
        $sp->SoLuongBan = $_POST['soLuongBanEdit'];
        $sp->SoLuotXem = $_POST['soLuotXemEdit'];
        $sp->HinhURL = UploadHinhAnh();

        $sp_BUS = new SanPham_BUS();
        $sp_BUS->ChinhSua($sp);
    }
}
?>

<?php
///////////////xóa sản phẩm
if(isset($_POST['maSanPhamDel'])){
    if($_POST['maSanPhamDel'] == ''){

    }
    else{
        include_once __DIR__ . '/../../BUS/SanPham_BUS.php';
        $sp_BUS = new SanPham_BUS();
        $sp_BUS->XoaSanPham($_POST['maSanPhamDel']);
    }
}
?>
