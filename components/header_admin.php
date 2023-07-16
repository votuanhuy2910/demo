<header style="background: #005180">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">TSK49</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kiểm duyệt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hướng dẫn</a>
                    </li>
                </ul>

                <div class="dropdown">
                    <?php if (isset($_SESSION['auth_user'])); ?>
                    <button class="btn btn-outline-secondary dropdown-toggle border-0 bg-transparent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['auth_user']['user_name']; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                    </ul>
                    <form action="logout.php" method="POST" style="display: contents">
                        <button type="submit" class="btn btn-outline-warning" name="logout_btn">Đăng xuất</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>