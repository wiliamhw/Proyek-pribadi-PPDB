<?php
$title = "Reset password"; // define title addon
require_once "database/connection.php";
require "entry/assets/reset-pass.asset.php"; // Backend
require "entry/views/partials/head.php"; // Front-end template
?>

<form action="reset-pass" method="post" class="login100-form validate-form">
    <span class="login100-form-title">
        Reset Password
    </span>

    <div class="wrap-input100 validate-input" data-validate="New password is required">
        <input class="input100" type="password" name="new_password" placeholder="New password" value="<?php echo $new_password; ?>">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    <div class="help-block">
        <p><?php echo $new_password_err; ?></p>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Confirm password is required">
        <input class="input100" type="password" name="confirm_password" placeholder="Confirm password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-check" aria-hidden="true"></i>
        </span>
    </div>
    <div class="help-block">
        <p><?php echo $confirm_password_err; ?></p>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
            Reset
        </button>
    </div>


    <div class="text-center p-t-136">
        <a class="txt2" href='../main/dashboard'>
            Kembali
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>

<?php require "entry/views/partials/footer.php";