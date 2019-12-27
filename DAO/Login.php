<?php
include_once __DIR__.'/../BUS/TaiKhoan_BUS.php';
include_once __DIR__.'/../BUS/session.php';
$session = new Session();
$session->start();

// Nếu có tồn tại phương thức post
if (isset($_POST['user_signin']) && isset($_POST['pass_signin'])) {
    // Xử lý các giá trị
    //$user_signin = trim(htmlspecialchars(addslashes($_POST['username'])));
    //$pass_signin = trim(htmlspecialchars(addslashes($_POST['password'])));
    // Các biến xử lý thông báo
    $show_alert = '<script>$("#login-form .alert").removeClass("invisible");</script>';
    $hide_alert = '<script>$("#login-form .alert").addClass("invisible");</script>';
    $success = '<script>$("#login-form .alert").attr("class", "alert alert-success");</script>';

    // Nếu giá trị rỗng
    if ($_POST['user_signin'] == '' || $_POST['pass_signin'] == '') {
        echo $show_alert . 'Vui lòng điền đầy đủ thông tin.';
    }
    // Ngược lại
    else {
        $kiemTra = new TaiKhoan_BUS();
        if ($kiemTra->checkUsername($_POST['user_signin'])) {
            if ($kiemTra->checkAccount($_POST['user_signin'], $_POST['pass_signin'])) {
                $session->send($_POST['user_signin'], $kiemTra->getName($_POST['user_signin']));
                //kiem tra admin
                if ($kiemTra->checkAdmin($_POST['user_signin'], $_POST['pass_signin'])) {
                    $session->sendAdmin(1);
                }
                else {
                    $session->sendAdmin(0);
                }
                echo 'User';
            } else {
                echo $show_alert . 'Mật khẩu không chính xác.';
            }
        } else {
            echo $show_alert . 'Tên đăng nhập không tồn tại.';
        }
    }
}
if (isset($_POST["action"])) {
    $session->destroy();
}
