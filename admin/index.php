
<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/comment.php";
include "../model/users.php";
include "header.php";
//controllers
if (isset($_SESSION['user'])) {
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                //search
            case 'search':
                if (isset($_POST['keyw']) && ($_POST['keyw'] != "")) {
                    $keyw = $_POST['keyw'];
                    $result = show_Pro_Key($keyw);
                } else {
                    $keyw = "";
                    $result = show_Pro_Key($keyw);
                }
                include 'sanpham/proShow.php';
                break;

            case 'updateCate':
                if (isset($_GET['id_cate']) && ($_GET['id_cate']) > 0) {
                    $cate_id = $_GET['id_cate'];
                    $result = query_CateUpdate($cate_id);
                }
                include 'danhmuc/cateUpdate.php';
                break;

            case 'updateCategory':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $cate_id = $_POST['cate_id'];
                    $cate_name = $_POST['cate_name'];
                    update_Cate($cate_id, $cate_name);
                }
                header('Location:index.php?act=show_list_cate');
                include 'danhmuc/cateShowAdd.php';
                break;

            case 'deleteCate':
                if (isset($_GET['id_cate']) && ($_GET['id_cate']) > 0) {
                    $cate_id = $_GET['id_cate'];
                    delete_Cate($cate_id);
                    header('Location:index.php?act=show_list_cate');
                }
                include 'danhmuc/cateShowAdd.php';
                break;

            case 'show_list_cate':
                if (isset($_POST['btn_add']) && ($_POST['btn_add'])) {
                    $cate_name = $_POST['cate_name'];
                    insert_Cate($cate_name);
                }
                $list_statistical = show_list_cate();
                include 'danhmuc/cateShowAdd.php';
                break;
            case 'show_thong_ke':
                $list_statistical = show_list_cate();
                include 'home.php';
                break;
                // San pham 

            case 'showPro':
                $result = show_Pro();
                include 'sanpham/proShow.php';
                break;
            case 'addPro':
                if (isset($_POST['btn_insert']) && ($_POST['btn_insert'])) {
                    $pro_name = $_POST['name_pro'];
                    $price = $_POST['price'];
                    $description = $_POST['editor'];
                    $cate_id = $_POST['cate_id'];
                    $name_img = $_FILES['pro_img']['name'];
                    $tmp_img = $_FILES['pro_img']['tmp_name'];

                    move_uploaded_file($tmp_img, '../Assets/img/' . $name_img);
                    insert_Pro($pro_name, $price, $name_img, $description, $cate_id);
                    header('Location: index.php?act=showPro');
                }
                include 'sanpham/proInsert.php';
                break;

            case 'update_Pro';
                if (isset($_GET['id_pro']) && ($_GET['id_pro']) > 0) {
                    $pro_id = $_GET['id_pro'];
                    $result = query_updatePro($pro_id);
                }
                include 'sanpham/proUpdate.php';
                break;
            case 'update_Product':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $pro_id = $_POST['pro_id'];
                    $pro_name = $_POST['pro_name'];
                    $price  = $_POST['price'];
                    $description = $_POST['editor'];
                    $cate_id = $_POST['cate_id'];

                    if (isset($_FILES['img_pro']['name']) && !empty($_FILES['img_pro']['name'])) {
                        $name_img = $_FILES['img_pro']['name'];
                        $tmp_img = $_FILES['img_pro']['tmp_name'];
                        move_uploaded_file($tmp_img, 'Assets/img/' . $name_img);
                    } else {
                        $sql_selected_img = "select image from products where pro_id = $pro_id";
                        $result_img = pdo_query_one($sql_selected_img);
                        $row_img = $result_img;
                        $name_img = $row_img['image'];
                    }
                    update_Pro($pro_id, $pro_name, $price, $name_img, $description, $cate_id);
                }
                header('Location:index.php?act=showPro');
                break;
            case 'delete_Pro';
                if (isset($_GET['id_pro']) && ($_GET['id_pro']) > 0) {
                    $pro_id = $_GET['id_pro'];
                    delete_Pro($pro_id);
                }
                header('Location:index.php?act=showPro');
                break;

                //user
            case 'log_out':
                session_unset();
                header('Location:../index.php');
                break;
            case 'show_list_users':
                $list_users = show_list_users();
                include 'nguoidung/show_taikhoan.php';
                break;
            case 'edit_query_user':
                if (isset($_GET['id_user'])) {
                    $user_id = $_GET['id_user'];
                    $result = edit_query_user($user_id);
                }
                include 'nguoidung/update_taikhoan.php';
                break;
            case 'update_User':
                if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
                    $user_id = $_POST['user_id'];
                    $user_name = $_POST['user_name'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    update_Users($user_id, $user_name, $pass, $email);
                    header('Location:index.php?act=show_list_users');
                }
                include 'nguoidung/update_taikhoan.php';
                break;
            case 'delete_User';
                if (isset($_GET['id_user']) && ($_GET['id_user']) > 0) {
                    $user_id = $_GET['id_user'];
                    delete_User($user_id);
                }
                header('Location:index.php?act=show_list_users');
                break;

                //comment 

            case 'show_list_cmt':
                $list_cmt = show_list_cmt();
                include 'binhluan/show_cmt.php';
                break;
            case 'show_list_cmt_user':
                $list_cmt = show_list_cmt_user();
                include 'binhluan/show_cmt_user.php';
                break;

            case 'delete_cmt';
                if (isset($_GET['id_cmt']) && ($_GET['id_cmt']) > 0) {
                    $cmt_id = $_GET['id_cmt'];
                    delete_cmt($cmt_id);
                }
                header('Location:index.php?act=show_list_cmt');
                break;
            
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    include "footer.php";
} else {
    header('Location:../index.php');
}
?>
    