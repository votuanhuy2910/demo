<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ueh_demo';

$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($mysqli, 'UTF8');

if (isset($_POST['submit'])) {
    $cccd = $_POST['CCCD'];
    $name = $_POST['name'];
    $schoolName = $_POST['school_name'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];

    if (!empty($cccd) && !empty($name) && !empty($schoolName) && !empty($number) && !empty($gender)) {

        $result = mysqli_query($mysqli, "INSERT INTO users values ('', '$cccd', '$name', '$schoolName', '$number', '$gender')");
        // mã hóa md5 password -> md5('$password')
        if ($result) {
            echo "Success";
        } else {
            echo "Failed";
        }
    } else {
        echo "Please type information";
    }
}
