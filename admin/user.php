<?php
session_start();

include "../config/dbcon.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../components/head.php" ?>
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        <?php include "../assets/css/style.css" ?>
    </style>

    <title>signup</title>
</head>

<body>
    <?php 
    // include "../components/header_admin.php"

    ?>

    <?php 
    // include "../message.php"

    ?>
    <!-- hello to user -->

    <?php include "../errors/404.php" ?>

    <?php require "../components/footer.php" ?>