<?php
include_once __DIR__.'/../BUS/TaiKhoan_BUS.php';

if (isset($_POST['account']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['tel'])) {
    // Các biến xử lý thông báo
    $show_alert = '<script>$("#info-user .alert").removeClass("invisible");</script>';
    $hide_alert = '<script>$("#info-user .alert").addClass("invisible");</script>';
    $success = '<script>$("#info-user .alert").attr("class", "alert alert-success mt-2");</script>';

    // Nếu giá trị rỗng
    if (($_POST['account'] == null) || ($_POST['name'] == null) ||($_POST['email'] == null) ||($_POST['address'] == null) ||($_POST['tel'] == null)) {
        echo $show_alert . 'Vui lòng điền đầy đủ thông tin.';
    }
    else {
        $tk = new TaiKhoan();
        $tk->TenNguoiDung = $_POST['name'];
        $tk->TenDangNhap = $_POST['account'];
        $tk->DiaChi = $_POST['address'];
        $tk->Sdt = $_POST['tel'];
        $tk->Emal = $_POST['email'];
        $bus = new TaiKhoan_BUS();
        if($bus->UpdateTK($tk))
        {
            echo $show_alert .$success. 'Cập nhật thành công.';
        }
        else {
            echo $show_alert . 'Đăng ký thất bại.';
        }
    }
}