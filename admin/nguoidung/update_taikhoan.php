
<style>
    form{
        display: flex;
        flex-direction: column;
        width:100%;

    }

    form input{
        margin-top: 4px;
        height: 40px;

    }
    .btn--edit input{
        margin-top: 10px;
        width :100%;
        background-color:grey;
    }

</style>
<form action="index.php?act=update_User" method="post">
        <h3>Thông tin tài khoản</h3>
        <input type="text" name="user_id" value="<?php echo $result['user_id'] ?>">
        <span style="text-align: left;">Tên Tài Khoản</span>
        <input type="text" name="user_name" class="box" placeholder="username" id="" required value="<?php echo $result['user_name'] ?>">
        <span style="text-align: left;">Email</span>
        <input type="email" name="email" class="box" placeholder="abc123@gmail.com" id="" required value="<?php echo $result['email'] ?>">
        <span style="text-align: left;">Mật Khẩu</span>
        <input type="text" name="pass" class="box" placeholder="*****" id="" required value="<?php echo $result['pass'] ?>">
        <div class="dn btn--edit">
            <input type="submit" value="Cập nhật" name="btn_update" style="background-color:#fa7858">
        </div>       
</form>
