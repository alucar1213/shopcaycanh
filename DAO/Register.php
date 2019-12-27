<?php
include_once __DIR__.'/../BUS/TaiKhoan_BUS.php';
// include_once __DIR__.'/../BUS/session.php';
include_once __DIR__.'/../DTO/TaiKhoan.php';
if (isset($_POST['name_info']) && isset($_POST['username_info']) && isset($_POST['password_info']) && isset($_POST['address_info']) && isset($_POST['phone_number_info']) && isset($_POST['email_info'])) {
    // Các biến xử lý thông báo
    $show_alert = '<script>$("#register-form .alert").removeClass("invisible");</script>';
    $hide_alert = '<script>$("#register-form .alert").addClass("invisible");</script>';
    $success = '<script>$("#register-form .alert").attr("class", "alert alert-success mt-2");</script>';

        // Nếu giá trị rỗng
        if (($_POST['name_info'] == null) ||($_POST['username_info'] == null) ||($_POST['password_info'] == null) ||($_POST['address_info'] == null) ||($_POST['phone_number_info'] == null) ||($_POST['email_info'] == null)) {
            echo $show_alert . 'Vui lòng điền đầy đủ thông tin.';
        }
        // Ngược lại    
        else {
            $kiemTra = new TaiKhoan_BUS();
            if ($kiemTra->checkUsername($_POST['username_info'])) {
                echo $show_alert . 'Tên đăng nhập đã tồn tại.';
            }
            else {
                $tk= new TaiKhoan();
                $tk->TenNguoiDung = $_POST['name_info'];
                $tk->TenDangNhap = $_POST['username_info'];
                $tk->MatKhau = $_POST['password_info'];
                $tk->DiaChi = $_POST['address_info'];
                $tk->Sdt = $_POST['phone_number_info'];
                $tk->Emal = $_POST['email_info'];
                if($kiemTra->AddTK($tk))
                {
                    echo $show_alert .$success. 'Đăng kí thành công.';
                }
                else {
                    echo $show_alert . 'Đăng ký thất bại.';
                };
            }
        }
}
