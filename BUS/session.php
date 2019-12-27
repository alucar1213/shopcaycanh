<?php

// Lớp session
class Session
{
    // Hàm bắt đầu session
    public function start()
    {
        session_start();
    }

    // Hàm lưu session
    public function send($user, $user_name)
    {
        $_SESSION['user'] = $user;
        $_SESSION['user_name'] = $user_name;
    }
    public function sendAdmin($admin)
    {
        $_SESSION['admin'] = $admin;
    }
    // Hàm lấy dữ liệu session
    public function get()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
        } else {
            $user = '';
        }
        return $user;
    }
    public function getuserName()
    {
        if (isset($_SESSION['user_name'])) {
            $user_name = $_SESSION['user_name'];
        } else {
            $user_name = '';
        }
        return $user_name;
    }
    //kiem
    public function getAdmin()
    {
        if (isset($_SESSION['admin'])) {
            $admin = $_SESSION['admin'];
        } else {
            $admin = '0';
        }
        return $admin;
    }

    // Hàm xoá session
    public function destroy()
    {
        session_destroy();
    }
}
