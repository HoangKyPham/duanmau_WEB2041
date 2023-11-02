<style>
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .popup-content {
        background-color: #fff;
        border-radius: 5px;
        text-align: center;
        padding: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 100px;
        font-weight: 600;

    }
</style>
<?php
if (isset($_SESSION['user'])) {
    extract($result);
?>
    <!-- Contact -->
    <div class="menu-contact">
        <a href="index.php">Trang Chủ </a> / <p class="menu-1">Thông tin tài khoản</p>
    </div>
    <!-- contact -->
     <!-- Đăng Ký -->
        <div class="login-form-container" style="margin-left: 400px; margin-right: 400px; margin-top: 30px; margin-bottom: 30px;">
            <form action="index.php?act=update_User" method="post">
                <h3>Thông tin tài khoản</h3>
                <input type="hidden" name="user_id" value="<?php echo $result['user_id'] ?>">
                <span style="text-align: left;">Tên Tài Khoản</span>
                <input type="text" name="user_name" class="box" placeholder="username" id="" required value="<?php echo $result['user_name'] ?>">
                <span style="text-align: left;">Email</span>
                <input type="email" name="email" class="box" placeholder="abc123@gmail.com" id="" required value="<?php echo $result['email'] ?>">
                <span style="text-align: left;">Mật Khẩu</span>
                <input type="password" name="pass" class="box" placeholder="*****" id="" required value="<?php echo $result['pass'] ?>">
                <div class="edit">
                    <div class="dn btn--edit">
                        <input type="submit" value="Cập nhật" name="btn_update">
                    </div>
                    <div class="dn btn--out">
                        <a href="index.php?act=log_out" style="color: black; text-decoration: none;font-size: large;">ĐĂNG XUẤT</a>
                    </div>
                </div>
            </form>

        </div>
        <!--End Đăng ký -->

    <?php
} else {
    header('Location:index.php?act=sign_in');
}

    ?>