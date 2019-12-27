<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hãng mới</button>
    <form id="form-them-hang-san-pham" method="post" name="main-form" id="main-form" enctype="multipart/form-data" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-group">
            <span>Tên hãng sản phẩm </span>
            <input type="text" name="tenHangSanPham" class="form-control" id="tenHangSanPham" placeholder="Tên hãng sản phẩm">
        </div>
        <div class="form-group">
            <span>Logo hãng </span>
            <input type="file" name="file-upload" id="file-upload"/>
        </div>
        <button type="submit" name="them" id="themHangSanPham" class="btn btn-success">Thêm</button>
    </form>
</div>

<?php
/////////////////////////////////Thêm
if (isset($_POST['tenHangSanPham']) && isset($_FILES)) {
    if ($_POST['tenHangSanPham'] == '') {

    } else {
        include_once __DIR__ . '/../../DTO/HangSanXuat_DTO.php';
        include_once __DIR__ . '/../../BUS/HangSanXuat_BUS.php';

///////////////////////Thêm hãng sản phẩm mới////////////////////////////////////////
        function UploadHinhAnh()
        {
            //sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
            $fileUpload = $_FILES['file-upload'];


            if ($fileUpload['name'] != null) {
                $filename = $fileUpload['tmp_name'];
                //random tên file
                $random = RandomString(6);//random 6 ký tự
                //chỉ cho phép upload file có size từ 5kB - 5MB
                $flagsize = CheckSize($fileUpload['size'], 5 * 1024, 5 * 1024 * 1024);

                //chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
                $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

                $tenHinh = null;

                if ($flagsize == true && $flagextension == true) {

                    $tenHinh = $random . $fileUpload['name'];

                    $destination = __DIR__ . '/upload/' . $tenHinh;//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

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

        $hang = new HangSanXuat();
        $hang->TenHangSanXuat = $_POST['tenHangSanPham'];
        $hang->LogoURL = UploadHinhAnh();
        $hang_BUS = new HangSanXuat_BUS();
        $result = $hang_BUS->ThemHangSanXuat($hang);
    }
}
?>

<?php
////////////////////////////////////////////Sửa

if ( isset($_POST['maHangSanPhamEdit'])&&isset($_POST['tenHangSanPhamEdit']) && isset($_FILES)) {

    if ($_POST['tenHangSanPhamEdit'] == '') {

    } else {
        include_once __DIR__ . '/../../DTO/HangSanXuat_DTO.php';
        include_once __DIR__ . '/../../BUS/HangSanXuat_BUS.php';

///////////////////////Thêm hãng sản phẩm mới////////////////////////////////////////
        function UploadHinhAnh()
        {
            //sử dụng move_upload_file để upload tập tin $fileName vào vị trí $destination
            $fileUpload = $_FILES['file-upload'];


            if ($fileUpload['name'] != null) {
                $filename = $fileUpload['tmp_name'];
                //random tên file
                $random = RandomString(6);//random 6 ký tự
                //chỉ cho phép upload file có size từ 5kB - 5MB
                $flagsize = CheckSize($fileUpload['size'], 5 * 1024, 5 * 1024 * 1024);

                //chỉ cho phép upload file định dạng hình ảnh jpg, png, JPEG
                $flagextension = CheckExtension($fileUpload['name'], array('jpg', 'png', 'JPEG'));

                $tenHinh = null;

                if ($flagsize == true && $flagextension == true) {

                    $tenHinh = $random . $fileUpload['name'];

                    $destination = __DIR__ . '/upload/' . $tenHinh;//chuỗi random + tên file để khi upload không bị trùng tên(cơ hội bị trùng tên rất ít)

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

        $hang = new HangSanXuat();
        $hang->MaHangSanXuat = $_POST['maHangSanPhamEdit'];
        $hang->TenHangSanXuat = $_POST['tenHangSanPhamEdit'];
        $hang->LogoURL = UploadHinhAnh();
        $hang_BUS = new HangSanXuat_BUS();

        $hang_BUS->ChinhSua($hang);
    }
}
?>

<?php
////////////////////////////xóa

if ( isset($_POST['maHangSanPhamDel'])) {
    if ($_POST['maHangSanPhamDel'] == '') {}
    else {
    include_once __DIR__ . '/../../DTO/HangSanXuat_DTO.php';
    include_once __DIR__ . '/../../BUS/HangSanXuat_BUS.php';

    $xoaHangBUS = new HangSanXuat_BUS();
    $xoaHangBUS->XoaHang($_POST['maHangSanPhamDel']);
    }
}

?>