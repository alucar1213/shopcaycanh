<?php
include_once __DIR__.'/../BUS/session.php';
$session = new Session();
$session->start();

if (isset($_POST["action"])) {
    $session->destroy();
    // header("Location: http://localhost/DA-WEB1-SHOPCAYCANH/", true, 301);
}