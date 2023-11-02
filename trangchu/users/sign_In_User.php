 <!-- Contact -->
 <div class="menu-contact">
     <a href="index.php">Trang Chủ </a> / <p class="menu-1">Đăng nhập tài khoản</p>
 </div>
 <!-- contact -->

 <!-- Đăng Nhập -->
 <div class="login-form-container" style="margin-left: 400px; margin-right: 400px; margin-top: 30px; margin-bottom: 30px;">
     <form action="index.php?act=sign_in" method="post">
         <h3>Đăng Nhập</h3>
         <span style="text-align: left;">Tài Khoản</span>
         <input type="text" name="user" class="box" placeholder="username" id="">
         <span style="text-align: left;">Mật Khẩu</span>
         <input type="password" name="pass" class="box" placeholder="*****" id="">
         <div class="checkbox">
             <input type="checkbox" name="" id="remember-me">
             <label for="remember-me">Lưu Mật Khẩu</label>
         </div>
         <div class="dn">
             <input type="submit" value="Đăng nhập" name="btn_signin">
         </div>
         <p style="text-align: left;">Quên mật Khẩu ? <a href="index.php?act=restore_Pass">Khôi phục mật Khẩu</a></p>
         <p style="text-align: left;">Nếu bạn chưa có tài khoản ? <a href="index.php?act=register">Đăng Ký Ngay</a></p>
     </form>
 </div>
 <!-- End dang nhap -->