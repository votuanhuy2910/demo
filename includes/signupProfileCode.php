<?php
session_start();

include "../config/dbcon.php";


if (isset($_POST["register-btn"])) {
    $cccd = mysqli_real_escape_string($conn, $_POST['cccd']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

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
        $query = "INSERT INTO users (identification, name, email, address, city, gender, phone) VALUES ('$cccd', '$name', '$email', '$address', '$city', '$gender', '$phone')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "Submit Successfully";
            header("Location: ../index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Something Went Wrong";
            header("Location: ../index.php");
            exit(0);
        }
    }
} else {
    header("Location: ../index.php");
    exit(0);
}
