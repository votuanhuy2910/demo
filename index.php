<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php" ?>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            display: none;
        }

        <?php include "assets/css/style.css" ?>
    </style>

    <title>signup</title>
</head>

<body>
    <?php include "components/header.php" ?>

    <main>
        <div class="container d-flex flex-column">
            <?php include "message.php" ?>
            <div class="infor-person border-bottom border-2 mb-3 d-flex align-items-center">
                <h1 class="text-capitalize">thông tin cá nhân</h1>


            </div>


            <div class="infor">
                <?php require "components/signupProfile.php" ?>
            </div>
        </div>
    </main>


    <?php require "components/footer.php" ?>