<?php session_start(); ?>
<html lang="en">

<head>
    <?php include "../components/head.php" ?>

    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Login</title>
</head>

<body style="background: #17a2b8">
    <h1 class="fs-2 text-center text-white" style="margin: 3rem 0 5rem 0">Đăng Nhập Quản Trị Tuyển Sinh K49</h1>
    <div style="max-width: 500px; margin: auto;"><?php include "../message.php" ?></div>
    <main style="background: #eaeaea; max-width: 500px; margin: auto;">


        <form action="includes/loginCode.php" method="POST" class="fs-3 p-4">
            <h1 class="fs-2 text-center" style="color: #17a2b8">Đăng nhập</h1>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color: #17a2b8">Tài khoản:</label>
                <input type="email" class="form-control fs-2" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #17a2b8">Mật khẩu:</label>
                <input type="password" class="form-control fs-2" name="pwd" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary fs-2 text-white border-0 outline-0" style="background: #17a2b8" name="login-ad">Đăng nhập</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>