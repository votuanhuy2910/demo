<form action="includes/signupProfileCode.php" method="POST" class="row g-3 needs-validation fs-4" novalidate>
    <div class="col-md-3">
        <label for="validationCustomUsername" class="form-label">Họ và Tên</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person fs-4"></i></span>
            <input type="text" class="form-control fs-4" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="nguyễn văn an" style="text-transform: uppercase;" name="name" required>
            <div class="invalid-feedback">
                Vui lòng cung cấp đầy đủ họ tên.
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustomIdentify" class="form-label">Căn cước công dân</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-file-person fs-4"></i></span>
            <input type="text" class="form-control fs-4" id="validationCustomIdentify" aria-describedby="inputGroupPrepend" data-maxlength="12" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" name="cccd" required>
            <div class="invalid-feedback">
                Vui lòng nhập chính xác căn cước công dân.
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustomEmail" class="form-label">Email</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope fs-4"></i></span>
            <input type="text" class="form-control fs-4" id="validationCustomEmail" aria-describedby="inputGroupPrepend" placeholder="annguyen@gmail.com" name="email" required>
            <div class="invalid-feedback">
                Vui lòng nhập chính xác email.
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustomPhone" class="form-label">Số điện thoại</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-phone fs-4"></i></span>
            <input type="text" class="form-control fs-4" id="validationCustomPhone" aria-describedby="inputGroupPrepend" data-maxlength="10" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" name="phone" required>
            <div class="invalid-feedback">
                Vui lòng nhập số điện thoại.
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <label for="city" class="form-label">Tỉnh/Thành phố</label>
        <!-- <input type="text" class="form-control fs-4" id="city" required name="city"> -->
        <select class="form-select fs-4" id="city" aria-label=".form-select-sm" name="city" required>
            <option value="" selected> -- Chọn -- </option>
        </select>
        <div class="invalid-feedback">
            Vui lòng nhập tỉnh/thành phố.
        </div>
    </div>
    <div class="col-md-4">
        <label for="district" class="form-label">Quận/Huyện</label>
        <!-- <input type="text" class="form-control fs-4" id="district" required name="district"> -->
        <select class="form-select fs-4" id="district" aria-label=".form-select-sm" name="district" required>
            <option value="" selected> -- Chọn -- </option>
        </select>
        <div class="invalid-feedback">
            Vui lòng nhập quận/huyện.
        </div>
    </div>
    <div class="col-md-4">
        <label for="ward" class="form-label">Phường/Xã</label>
        <!-- <input type="text" class="form-control fs-4" id="ward" required name="ward"> -->
        <select class="form-select fs-4" id="ward" aria-label=".form-select-sm" name="ward" required>
            <option value="" selected> -- Chọn -- </option>
        </select>
        <div class="invalid-feedback">
            Vui lòng nhập phường/xã.
        </div>
    </div>

    <div class="col-md-12">
        <label for="validationCustom05" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control fs-4" id="validationCustom05" name="address" required>
        <div class="invalid-feedback">
            Vui lòng nhập địa chỉ.
        </div>
    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Giới tính</label>
        <select class="form-select fs-4" id="validationCustom04" name="gender" required>
            <option selected disabled value=""> -- Chọn -- </option>
            <option>Nam</option>
            <option>Nữ</option>
        </select>
        <div class="invalid-feedback">
            Vui lòng chọn giới tính.
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary p-3 fs-3" type="submit" name="register-btn">Lưu</button>
    </div>
</form>