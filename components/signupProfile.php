<form action="includes/signupProfileCode.php" method="POST" class="row g-3 needs-validation fs-4" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Căn cước công dân</label>
        <input type="number" class="form-control fs-4" id="validationCustom01" data-maxlength="12" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" required name="cccd">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Họ và Tên</label>
        <input type="text" class="form-control fs-4" id="validationCustom02" required name="name">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control fs-4" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="email">
            <div class="invalid-feedback">
                Please choose a email.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Address</label>
        <input type="text" class="form-control fs-4" id="validationCustom05" required name="address">
        <div class="invalid-feedback">
            Please provide a valid address.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom03" class="form-label">City</label>
        <input type="text" class="form-control fs-4" id="validationCustom03" required name="city">
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Gender</label>
        <select class="form-select fs-4" id="validationCustom04" required name="gender">
            <option selected disabled value="">Choose...</option>
            <option>Nam</option>
            <option>Nữ</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid gender.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Phone</label>
        <input type="number" class="form-control fs-4" id="validationCustom03" data-maxlength="12" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" required name="phone">
        <div class="invalid-feedback">
            Please provide a valid phone.
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary p-3 fs-3" type="submit" name="register-btn">Submit form</button>
    </div>
</form>