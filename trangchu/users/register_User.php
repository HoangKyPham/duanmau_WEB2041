<!-- Contact -->
<div class="menu-contact">
    <a href="index.php">Trang Chủ </a> / <p class="menu-1">Đăng ký tài khoản</p>
</div>
<!-- contact -->

<!-- Đăng Ký -->
<div class="login-form-container" style="margin-left: 400px; margin-right: 400px; margin-top: 30px; margin-bottom: 30px;">
    <form action="index.php?act=register" method="post">
        <h3>Đăng Ký Tài Khoản</h3>
        <span style="text-align: left;">Tên Tài Khoản</span>
        <input type="text" name="user" class="box" placeholder="username" id="" required>
        <span style="text-align: left;">Email</span>
        <input type="email" name="email" class="box" placeholder="abc123@gmail.com" id="" required>
        <span style="text-align: left;">Mật Khẩu</span>
        <input type="password" name="pass" class="box" placeholder="*****" id="" required>
        <span style="text-align: left;">Nhập Lại Mật Khẩu</span>
        <input type="password" name="pass" class="box" placeholder="*****" id="" required>
        <div class="dn" style="background-color: #fa7858; height: 30px; border-radius: 5px; font-size: 18px; text-align: center;">
            <input type="submit" value="Đăng ký" name="btn_register">
        </div>
        <p style="text-align: left;">Nếu bạn đã có tài khoản ? <a href="index.php?act=sign_in">Đăng Nhập Ngay</a></p>
    </form>
</div>
<!--End Đăng ký -->