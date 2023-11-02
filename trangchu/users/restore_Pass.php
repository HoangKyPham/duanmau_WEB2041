<!-- Contact -->
<div class="menu-contact">
    <a href="index.php">Trang Chủ </a> / <p class="menu-1">Khôi phục mật Khẩu</p>
</div>
<!-- contact -->

<!-- Khôi phục -->
<div class="login-form-container" style="margin-left: 400px; margin-right: 400px; margin-top: 30px; margin-bottom: 30px;">
    <form action="index.php?act=restore_Pass" method="post">
        <h3>Khôi phục mật khẩu</h3>
        <span style="text-align: left;">Tên Tài Khoản</span>
        <input type="text" name="user" class="box" placeholder="username" id="" required>
        <span style="text-align: left;">Nhập mật khẩu cũ</span>
        <input type="text" name="old_pass" class="box" placeholder="*****" id="" required>
        <span style="text-align: left;">Mật khẩu mới</span>
        <input type="text" name="new_pass" class="box" placeholder="*****" id="" required>
        <span style="text-align: left;">Nhập Lại Mật Khẩu Mới</span>
        <input type="text" name="new_pass" class="box" placeholder="*****" id="" required>
        <div class="dn" style="background-color: #fa7858; height: 30px; border-radius: 5px; font-size: 18px; text-align: center;">
            <input type="submit" value="Khôi phục" name="btn_restore">
        </div>
        <p style="text-align: left;">Nếu bạn đã có tài khoản ? <a href="./login.php">Đăng Nhập Ngay</a></p>
    </form>
</div>
<!--End Khôi phục -->