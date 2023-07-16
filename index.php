<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php" ?>
    <link rel="stylesheet" href="assets/css/style.css">

    <title>signup</title>
</head>

<body>
    <?php include "components/header.php" ?>

    <main>
        <div class="container d-flex flex-column">
            <div class="infor-person border-bottom border-2 mb-3 d-flex align-items-center">
                <h1>THONG TIN CA NHAN</h1>

                <?php include "message.php" ?>
            </div>


            <div class="infor">
                <?php require "components/signupProfile.php" ?>
            </div>
        </div>
    </main>


    <?php require "components/footer.php" ?>