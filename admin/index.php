<?php

include "authentication.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

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
    <?php include "../components/header_admin.php" ?>
    <?php include "../message.php" ?>

    <main style="margin-top: 0">
        <div class="container-fluid d-flex flex-column">
            <div class="row">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-body fs-3">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td style="vertical-align: middle">STT</td>
                                    <td style="vertical-align: middle">Căn cước công dân</td>
                                    <td style="vertical-align: middle">Họ tên</td>
                                    <td style="vertical-align: middle">Email</td>
                                    <td class="col-3" style="vertical-align: middle">Địa chỉ</td>
                                    <td style="vertical-align: middle">Thành phố</td>
                                    <td style="vertical-align: middle">Giới tính</td>
                                    <td style="vertical-align: middle">Số điện thoại</td>
                                </tr>

                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <td style="vertical-align: middle"><?php echo $row['id'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['identification'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['name'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['email'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['address'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['city'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['gender'] ?></td>
                                        <td style="vertical-align: middle"><?php echo $row['phone'] ?></td>
                                </tr>
                            <?php
                                    }
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require "../components/footer.php" ?>