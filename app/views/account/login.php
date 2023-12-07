<?php

?>
<link type="text/css" rel="stylesheet" href="http://localhost/mvc_dacs2/public/assets/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="containerr">
    <h1 class="label">
        <center>Đăng Nhập</center>
    </h1>
    <form class="login_form" action="login" method="post" name="form" onsubmit="return validated()">
        <div class="font">Email or Phone</div>
        <input autocomplete="off" type="text" name="email" placeholder="Nhập email hoặc số điện thoại của bạn" />
        <div id="email_error">
            Vui lòng điền Email hoặc số điện thoại của bạn
        </div>
        <div class="font font2">Password</div>
        <input type="password" name="password" placeholder="Nhập mật khẩu của bạn" />
        <div id="pass_error">Vui lòng điền mật khẩu của bạn</div>
        <?php if ((isset($_SESSION['erros']) && ($_SESSION['erros'] != ""))) {
            echo "<font color='red'>" . $_SESSION['erros'] . "</font>";
        }
        ?>
        <div class="forgot-password">
            <a href="forgot_password.html">Quên mật khẩu?</a>
        </div>
        <input type="submit" name="login" value="Đăng nhập"></input>
        <div class="register-link">
            <a href="register.html">Đăng ký ngay!</a>
        </div>
        <div class="social-login">
            <a class="facebook" href="#"><i class="bi bi-facebook"></i></a>
            <a class="google" href="#"><i class="bi bi-google"></i></a>
            <a class="twitter" href="#"><i class="bi bi-twitter-x"></i></a>
        </div>
    </form>
</div>
<script src="valid.js"></script>