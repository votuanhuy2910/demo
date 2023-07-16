<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/head.php" ?>
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Method-One</title>
</head>

<body>
    <?php include "components/header.php" ?>

    <main class="container fs-1" style="max-width: 780px">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Check result PT1
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div>
                                <form action="includes/method-oneCode.php" method="POST" accept-charset="utf-8">
                                    <div class="form-group mb-3">
                                        <input type="text" name="get_CCCD" class="form-control fs-2" placeholder="Type CCCD" maxlength="12" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary fs-2" name="search_by_CCCD" blanks>Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require "components/footer.php" ?>