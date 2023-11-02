<!-- Contact -->
<div class="menu-contact">
    <a href="index.php">Trang Chủ </a> / <p class="menu-1">Xác thực</p>
</div>
<!-- contact -->

<!-- Xác thực -->
<div class="login-form-container" style="margin-left: 400px; margin-right: 400px; margin-top: 30px; margin-bottom: 30px;">
    <form action="index.php?act=auth_User" method="post">
        <h3>Xác thực tài khoản</h3>
        <span style="text-align: left;">Mã xác thực</span>
        <input type="text" name="auth_token" class="box" placeholder="Vui lòng nhập mã xác thực" id="" required>
        <div class="dn" style="background-color: #fa7858; height: 30px; border-radius: 5px; font-size: 18px; text-align: center;">
            <input type="submit" value="Xác thực" name="btn_auth">
        </div>
        <p style="text-align: left;">Nếu bạn muốn hủy ? <a href="index.php">Hủy</a></p>
    </form>
</div>
<!--End xác thực -->