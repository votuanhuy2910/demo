<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Regis Form</title>
</head>

<body>


    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="controllers/regisForm.php" method="POST">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" />
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" value="male" id="male" />Male</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender" value="female" id="female" />Female</label>
                                <label for="others" class="radio-inline"><input type="radio" name="gender" value="other" id="others" />Others</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input type="number" class="form-control" id="number" name="number" />
                        </div>
                        <div>
                            <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                                <option value="" selected>Chọn tỉnh thành</option>
                            </select>

                            <select class="form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                                <option value="" selected>Chọn quận huyện</option>
                            </select>

                            <select class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                                <option value="" selected>Chọn phường xã</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Gửi">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="public/js/apiCountry.js"></script>
</body>

</html>