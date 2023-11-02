<?php
session_start();

include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/users.php';
include 'trangchu/header.php';
include 'model/comment.php';
$result_New = show_Pro_New();

//controllers
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'all_Items':
            if (isset($_GET['id_Cate'])) {
                $cate_id = $_GET['id_Cate'];
                $result = show_Pro_Cate($cate_id);
            } else {
                $result = show_Pro();
            }

            include 'trangchu/all_Items.php';
            break;
        case 'detail_Item':
            if (isset($_POST['btn_cmt']) && ($_POST['btn_cmt']) && !empty($_POST['content'])) {
                $content = $_POST['content'];
                $pro_id = $_POST['pro_id'];
                $user_id = $_POST['user_id'];
                $date = date('Y-m-d');
                insert_Cmt($content, $user_id, $pro_id, $date);
            }
            if (isset($_GET['id_pro'])) {
                $pro_id = $_GET['id_pro'];
                $result_Detail = detail_Item($pro_id);
                $list_Cmt=show_Cmt_Query($pro_id);
            }
            include 'trangchu/detail_Item.php';
            break;
        case 'search_Items':
            if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                $keyw = $_POST['keyw'];
                $result = show_Pro_Key($keyw);
            } else {
                $keyw = "";
                $result = show_Pro_Key($keyw);
            }
            include 'trangchu/all_Items.php';
            break;
        
        case 'register':
            if (isset($_POST['btn_register'])&&($_POST['btn_register'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    insert_Users($user,$pass,$email);   
                    header('Location:index.php?act=sign_in');
                }    
            include 'trangchu/users/register_User.php';
            break;
        case 'sign_in':
            if (isset($_POST['btn_signin'])&&($_POST['btn_signin'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $result=sign_Users($user,$pass);
                if ($result) {
                    if ($user === 'admin' && $pass === '123456') {
                        $_SESSION['user'] = $result;
                        if ($_GET['act'] === 'admin') {
                            header("Location: admin/index.php?act=show_thong_ke");
                        } else {
                            header("Location: index.php");
                        }
                    } else {
                        $_SESSION['user'] = $result;
                        header('Location: index.php');
                    }
                } else {
                    echo "Không đăng nhập được";
                }
            }
            
            include 'trangchu/users/sign_in_User.php';
            break;
        case 'restore_Pass':
            if (isset($_POST['btn_restore'])&& ($_POST['btn_restore'])){
                $user = $_POST['user'];
                $old_pass = $_POST['old_pass'];
                $new_pass = $_POST['new_pass'];
                
                $result = sign_Users($user,$old_pass);
                if ($result) {
                    $user_id = $result['user_id'];
                    restore_Pass($user_id,$new_pass);
                    header('Location:index.php?act=sign_in');
                }else{
                    echo "Nhap sai thong tin tai khoan hoac mat khau";
                }
            }
            include 'trangchu/users/restore_Pass.php';
            break;
        case 'edit_query_user':
            if(isset($_GET['id_user'])){
                $user_id=$_GET['id_user'];
                $result = edit_query_user($user_id);
            }
            include 'trangchu/users/edit_User.php';
            break;
        case 'update_User':
            if (isset($_POST['btn_update'])&&($_POST['btn_update'])) {
                $user_id=$_POST['user_id'];
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                update_Users($user_id,$user_name,$pass,$email);
                $_SESSION['user_name'] = $user_name;
                header('Location: ' . $_SERVER['PHP_SELF']);
            }
        include 'trangchu/users/edit_User.php';
        break;
        case 'log_out':
            session_unset();
            header('Location:index.php');
            break;
        default:
            include 'trangchu/home.php';
            break;
    }
} else {
    include 'trangchu/home.php';
}
include 'trangchu/footer.php';
