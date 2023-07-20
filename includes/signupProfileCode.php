<?php
session_start();

include "../config/dbcon.php";


if (isset($_POST["register-btn"])) {
    $name = mysqli_real_escape_string($conn, mb_strtoupper($_POST['name'], 'UTF-8'));
    $cccd = mysqli_real_escape_string($conn, $_POST['cccd']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $ward = mysqli_real_escape_string($conn, $_POST['ward']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    if (empty($name) && empty($cccd) && empty($email) && empty($phone) && empty($city) && empty($district) && empty($ward) && empty($address) && empty($gender)) {
        $_SESSION['message'] = "Vui lòng đầy đủ thông tin";
        header("Location: ../index.php");
        exit(0);
    } else {
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($conn, $checkemail);

        $checkcccd = "SELECT identification FROM users WHERE identification='$cccd'";
        $checkcccd_run = mysqli_query($conn, $checkcccd);

        if (mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['message'] = "Already Email Exists";
            header("Location: ../index.php");
            exit(0);
        } else if (mysqli_num_rows($checkcccd_run) > 0) {
            $_SESSION['message'] = "Already CCCD Exists";
            header("Location: ../index.php");
            exit(0);
        } else {
            $query = "INSERT INTO users (name, identification, email, phone, city, district, ward, address, gender) VALUES ('$name', '$cccd', '$email', '$phone', '$city', '$district', '$ward', '$address', '$gender')";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                $_SESSION['message'] = "Đăng ký thành công";
                header("Location: ../index.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: ../index.php");
                exit(0);
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit(0);
}
