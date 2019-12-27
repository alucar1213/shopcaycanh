<div class="dropdown themmoi">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản mới</button>
    <form id="form-them-tai-khoan" method="post" accept-charset="utf-8" class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
        <div class="form-group">
            <span>Tên hiển thị </span>
            <input type="text" name="tenHienThi" class="form-control" id="tenHienThi" placeholder="Tên tên hiển thị">
        </div>

        <div class="form-group">
            <span>Địa chỉ </span>
            <input type="text" name="diaChi" class="form-control" id="diaChi" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <span>Số điện thoại </span>
            <input type="text" name="dienThoai" class="form-control" id="soDienThoai" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <span>Email </span>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <span>Tên đăng nhập </span>
            <input type="text" name="tenDangNhap" class="form-control" id="tenDangNhap" placeholder="Tên đăng nhập">
        </div>

        <div class="form-group">
            <span>Mật khẩu </span>
            <input type="password" name="matKhau" class="form-control" id="matKhau" placeholder="Mật khẩu">
        </div>

        <div class="form-group">
            <span>Loại tài khoản </span>
            <select class="custom-select" name="loaiTaiKhoan">
                <option value="1">Thường</option>
                <option value="0">Admin</option>
            </select>
        </div>
        <div class="alert alert-danger invisible mt-2 mb-0"></div>
        <button type="submit" id="themTaiKhoan" class="btn btn-success">Thêm</button>
    </form>
</div>

<?php
/////////////////////thêm tài khoản
if(isset($_POST['tenHienThi']) && isset($_POST['diaChi']) && isset($_POST['dienThoai']) && isset($_POST['tenDangNhap']) && isset($_POST['matKhau'])) {

    if ($_POST['tenHienThi'] == "" || $_POST['diaChi'] == "" || $_POST['dienThoai'] == "" || $_POST['tenDangNhap'] == "" || $_POST['matKhau'] == "") {

    } else {
        include_once __DIR__ . '/../../BUS/TaiKhoan_BUS.php';
        include_once __DIR__ . '/../../DTO/TaiKhoan_DTO.php';

        if (($_POST['tenHienThi'] == "") || ($_POST['diaChi'] == "") || ($_POST['dienThoai'] == "") || ($_POST['email'] == null) || ($_POST['tenDangNhap'] == null) || ($_POST['matKhau'] == null)) {

        } else {
            $taiKhoan = new TaiKhoan();

            $themTaiKhoan = new TaiKhoanBUS();
            $taiKhoan->TenHienThi = $_POST['tenHienThi'];
            $taiKhoan->DiaChi = $_POST['diaChi'];
            $taiKhoan->DienThoai = $_POST['dienThoai'];
            $taiKhoan->Email = $_POST['email'];
            $taiKhoan->TenDangNhap = $_POST['tenDangNhap'];
            $taiKhoan->MatKhau = $_POST['matKhau'];

            $taiKhoan->MaLoaiTaiKhoan = $_POST['loaiTaiKhoan'];

            $themTaiKhoan = new TaiKhoanBUS();

            $themTaiKhoan->ThemTaiKhoan($taiKhoan);
        }
    }
}
else{

}
?>

<?php
include_once __DIR__ . '/../../BUS/TaiKhoan_BUS.php';
include_once __DIR__.'/../../DTO/TaiKhoan_DTO.php';
//////////////////////////sửa tài khoản

if(isset($_POST['maTaiKhoanEdit'])||isset($_POST['tenDangNhapEdit']) || isset($_POST['matKhauEdit']) ||isset($_POST['tenHienThiEdit']) ||isset($_POST['soDienThoaiEdit']) ||isset($_POST['emaiEdit']) ||isset($_POST['diaChiEdit'])||isset($_POST['loaiTaiKhoanEdit'])){

    if($_POST['maTaiKhoanEdit'] == '' || $_POST['tenDangNhapEdit'] == '' || $_POST['matKhauEdit'] == ''|| $_POST['tenHienThiEdit'] == '' || $_POST['soDienThoaiEdit'] == ''|| $_POST['emaiEdit'] == '' || $_POST['diaChiEdit'] == ''|| $_POST['loaiTaiKhoanEdit'] == ''){

    }
    else{
        $tkUpdateBUS = new TaiKhoanBUS();
        $tkUpdate = new TaiKhoan();
        $tkUpdate->MaTaiKhoan = $_POST['maTaiKhoanEdit'];
        $tkUpdate->TenDangNhap = $_POST['tenDangNhapEdit'];
        $tkUpdate->MatKhau = $_POST['matKhauEdit'];
        $tkUpdate->TenHienThi = $_POST['tenHienThiEdit'];
        $tkUpdate->DienThoai = $_POST['soDienThoaiEdit'];
        $tkUpdate->Email = $_POST['emaiEdit'];
        $tkUpdate->DiaChi = $_POST['diaChiEdit'];
        $tkUpdate->MaLoaiTaiKhoan = $_POST['loaiTaiKhoanEdit'];

        $tkUpdateBUS->ChinhSua($tkUpdate);
    }
}
?>

<?php
///////////////////xóa tài khoản
if(isset($_POST['maTaiKhoanDel'])){
    if($_POST['maTaiKhoanDel'] == ''){

    }
    else{
        include_once __DIR__ . '/../../BUS/TaiKhoan_BUS.php';
        $tkXoaBUS = new TaiKhoanBUS();
        $tkXoaBUS->XoaTaiKhoan($_POST['maTaiKhoanDel']);
    }
}
?>