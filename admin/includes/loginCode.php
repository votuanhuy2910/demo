<?php
session_start();

include "../../config/dbcon.php";

if (isset($_POST['login-ad'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $login_query = "SELECT * FROM admin WHERE email='$email' AND password='$pwd' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        foreach ($login_query_run as $data) {
            $user_id = $data['id'];
            $user_name = $data['username'];
            $user_email = $data['password'];
            $role_as = $data['role_as'];
        }


        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];

        if ($_SESSION['auth_role'] == '1') {
            $_SESSION['message'] = "Welcome to admin"; //1=admin
            header("Location: ../index.php");
            exit(0);
        } elseif ($_SESSION['auth_role'] == '0') { // 0=user
            $_SESSION['message'] = "Welcome to user";
            header("Location: ../user.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Tài khoản hoặc mật khẩu sai";
        header("Location: ../login.php");
        exit(0);
    }
} else {
    $_SESSION['message'] = "Bạn không được phép truy cập vào file này";
    header("Location: ../login.php");
    exit(0);
}
