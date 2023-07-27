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

    <main>
        <div class="container d-flex flex-column">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-body fs-3">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>CCCD</td>
                                    <td>NAME</td>
                                    <td>EMAIL</td>
                                    <td>CITY</td>
                                    <td>ADDRESS</td>
                                    <td>GENDER</td>
                                    <td>PHONE</td>
                                </tr>

                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <td><?php echo $row['identification'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['city'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
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