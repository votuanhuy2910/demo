<?php
    $conn = mysqli_connect("localhost", "root", "", "ueh_demo");
    mysqli_set_charset($conn, 'UTF8');

    if ($conn->connect_error) {
        die('Connection Failed: ' .$conn->connect_error);
    }
