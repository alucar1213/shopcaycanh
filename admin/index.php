<?php
    //if (!defined('IN_SITE')) die ('The request not found');
    include_once 'DAO/init.php';
    include_once __DIR__.'../../BUS/session.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="GUI/css/admin.css">
</head>
<body>
    <?php

        $session = new Session();
        $admin = $session->getAdmin();
        if (isset($_POST["action"])) {
            $session->destroy();
        }
        if (isset($_POST["action"])) {
            $session->destroy();
        }
        if(!$admin)//chưa đăng nhập
        {
            //include 'GUI/modules/mDangNhap.php';
            // PHP permanent URL redirection
            //how to delay
            header("Location: http://localhost/DA-WEB1-SHOPCAYCANH/", true, 301);
        }
        else//đã đăng nhập
        {
            include 'GUI/pages/pIndex.php';
        }
    ?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="GUI/js/admin.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="GUI/js/chart.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="GUI/js/ajaxChiTietDonHang.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
