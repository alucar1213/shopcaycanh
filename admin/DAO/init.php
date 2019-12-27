<?php


//Thông tin chung
$_DOMAIN = 'http://localhost:8080/web1/DA-WEB1-SHOPCAYCANH/admin';

$_DOMAIN_trang_mua_sam = 'www.google.com';
date_default_timezone_set('Asia/Ho_Chi_Minh');//khởi tạo giờ địa phương
$date_current = '';
$date_current = date("Y-m-d H:i:sa");//định dạng năm/tháng/ngày

session_start();//khởi tạo session

if (isset($_SESSION['user']))//kiểm tra trong session có tồn tại user
{
    $user = $_SESSION['user'];//nếu session đã tồn tại user thì gán user =  user trong session
}
else
{
    $user = '';//nếu trong session chưa tồn tại user thì khởi tạo nó rỗng
}