<?php
if (isset($_SESSION['message'])) {
?>
    <div class="alert alert-warning alert-dismissible fade show fs-4 ms-3 border-0" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message'];  ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['message']);
}
?>