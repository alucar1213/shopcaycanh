<div id="topbar">
    <div class="row">
        <div class="col-12 col-lg-3">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/?hl=vi" class="fab fa-instagram"></a>
        <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
    </div>
<div class="col-12 col-lg-6" style="text-align: center;">
        <i class="fa fa-phone"></i> &nbsp;0965521664646
        <span></span>
        <i class="fa fa-envelope"></i> &nbsp; admin@sevenleaves.vn
</div>
<?php
if ($user) {
    ?>
    <div class="col-3 user">
        <span>Xin chào, <?php echo $user_name; ?></span>
        <ul>
            <?php
                if ($admin) {                   
            ?>
                <li>
                <a href="admin/">Admin</a>
                </li>
            <?php
                }
            ?>
            <li>
                <a href="index.php?p=6 #info-user">Thông tin tài khoản</a>
            </li>
            <li>
                <a href="index.php?p=7">Kiểm tra đơn hàng</a>
            </li>
            <li  id="logout-destop">
            <a href="">Đăng xuất</a>
            </li>
        </ul>
    </div>
<?php
}
else {
    // Hiển thị modal đăng nhập
?>
    <div id="Login" class="col-12 col-lg-3" style="text-align: right;">
        <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="login()">Đăng nhập</a>
        &nbsp;
        |
        &nbsp;
        <a role="button" data-toggle="modal" data-target="#Modal-form" onclick="registered()">Đăng ký</a>
    </div>
<?php
}
?>