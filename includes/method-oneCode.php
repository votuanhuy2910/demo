<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../components/head.php" ?>
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Danh Sách</title>
</head>

<body>
    <?php include "../components/header.php" ?>

    <main class="container fs-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title fw-bold">
                            Result PT1
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">CCCD</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Phone</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    include "../config/dbcon.php";

                                    if (isset($_POST['search_by_CCCD'])) {
                                        $cccd = $_POST['get_CCCD'];
                                        $query = "SELECT * FROM users WHERE identification='$cccd'";
                                        $query_run = mysqli_query($conn, $query);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_array($query_run)) {
                                    ?>
                                                <tr>
                                                    <td><?php echo $row['identification']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['address']; ?></td>
                                                    <td><?php echo $row['city']; ?></td>
                                                    <td><?php echo $row['gender']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td style="text-align: center;" colspan="6">Data Fail</td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require "../components/footer.php" ?>