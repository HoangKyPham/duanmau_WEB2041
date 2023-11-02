<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoang Ky</title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/product.css">
    <link rel="shortcut icon" type="image/png" href="./Assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div id="main">
        <div class="header">
            <div class="icon">
                <a href="index.php"><img src="./Assets/img/Black.png" alt="trangchu" width="14%" sizes="cover"></a>
            </div>
        </div>
        <hr />
        <!-- Menu -->
        <div class="menu">
            <ul class="nav">
                <li><a href="index.php" class="Home">Home</a></li>
                <li><a href="">Luxury <i class="fas fa-caret-down"></i></a>
                    <ul class="subnav">
                        <li><a href="index.php?act=all_Items&id_Cate=1">Rolex</a></li>
                        <li><a href="index.php?act=all_Items&id_Cate=2">Patek Philip</a></li>
                        <li><a href="index.php?act=all_Items&id_Cate=3">Richard Mile</a></li>
                        <li><a href="index.php?act=all_Items&id_Cate=4">Casio</a></li>
                        <li><a href="index.php?act=all_Items&id_Cate=5">Jacob & Co</a></li>
                    </ul>
                </li>
                <li><a href="index.php?act=all_Items">All Items</a></li>
                <!-- <li><a href="./tintuc.php">News</a></li>
                <li><a href="./sale.php" class="Sale">Clearanse Sale</a></li> -->
            </ul>
            <div class="menu-icon">
                <!-- update them muon bam tim kiem thi khong duoc de trong va nguoc lai -->
                <form action="index.php?act=search_Items" method="post">
                    <button type="submit" name="btn_search">
                        <i class="fas fa-search"></i>
                    </button>
                    <input class="timkiem" type="text" name="keyw" placeholder="Tìm kiếm sản phẩm...">
                </form>
                <?php
                if (isset($_SESSION['user'])) {
                    $result = $_SESSION['user'];
                    if ($result['user_name'] == "admin" && $result['pass'] == "123456") {
                        $atb = 'admin/index.php?act=show_thong_ke';
                    }else {
                        $atb = "index.php?act=edit_query_user&&id_user=".$result['user_id'];

                    }
                ?>
                    <a href="<?php echo $atb; ?>" class="user">
                        <i class="fas fa-user-circle">
                            <?php echo $result['user_name']; ?>
                        </i>
                    </a>
                <?php
                } else {
                ?>
                    <a href="index.php?act=sign_in" class="user"><i class="fas fa-user-circle"></i></a>
                <?php
                }
                ?>
                <a href="index.php?act=cart" class="tui"><i class="fas fa-shopping-bag"></i></a>
            </div>
        </div>