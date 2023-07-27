<?php
session_start();

include "../config/dbcon.php";

if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Đăng nhập admin để vào trang chủ";
    header('location: login.php');
    exit(0);
} else {
    if ($_SESSION['auth_role'] != "1") {
        $_SESSION['message'] = "Bạn không được ủy quyền với tư cách quản trị viên";
        header("Location: login.php");
        exit(0);
    }
}
