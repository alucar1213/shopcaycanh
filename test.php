<?php
    include_once 'BUS/HangSanXuat_BUS.php';
    $XuatXu = new HangSanXuat_BUS();
    $ds = $XuatXu->DSXuatXu();
    var_dump($ds);die;
    // foreach ($ds as $xuatXu) {
    //     var_dump($ds);die;           
    // }
?>