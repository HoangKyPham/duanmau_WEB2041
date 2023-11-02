<?php
extract($result_Detail);
?>
<div class="menu-contact">
    <a href="./index.php">Trang Chủ </a> / <p class="menu-1"><?php echo $result_Detail['cate_name']; ?></p> / <p class="menu-1"> <?php echo $result_Detail['pro_name']; ?></p>
</div>

<div class="product">

    <img src="Assets/img/<?php echo $result_Detail['image']; ?>" alt="product">
    <div class="info">
        <p class="name"><?php echo $result_Detail['pro_name']; ?></p>
        <p class="status">Thương hiệu: <span><?php echo $result_Detail['cate_name']; ?></span> | Tình trạng: <span>Còn hàng</span></p>
        <p class="price"><b><?php echo $result_Detail['price']; ?></b> <del>1.500.000.000₫</del></p>
        <p>Kích thước</p>
        <div class="size">
            <div>13 – 15.5 cm</div>
            <div>16 – 18.5 cm</div>
            <div>19 – 21.5 cm</div>
        </div>
        <div class="amount">
            <p>Số lượng:</p>
            <input type="number" value="1">
        </div>
        <button>Thêm vào giỏ hàng</button>
    </div>
</div>
<div class="description">
    <div class="label">Mô tả</div>
    <div class="content">
        <?php
        echo $result_Detail['description'];
        ?>
    </div>
</div>
<div class="cmt">
    <div class="cmt__label">Bình luận</div>
    <div class="cmt__content">
        <?php 
            if (isset($_SESSION['user'])) {
        ?>
        <form class="cmt__content--form" action="index.php?act=detail_Item&id_pro=<?php echo $result_Detail['pro_id']; ?>" method="post">
            <input type="hidden" name="pro_id" id="" value="<?php echo $result_Detail['pro_id']; ?>">
            <input type="hidden" name="user_id" value="<?php echo $result['user_id']; ?>">
            <span><?php echo $result['user_name']; ?></span>
            <input type="text" name="content" id="" value="">
            <button type="submit" value="Gui binh luan" name="btn_cmt">Gửi bình luận</button>
        </form>
        <?php
            } else {
        ?>
                <p style="margin-left:20px;text-align: left;"><a href="index.php?act=sign_in" style="text-decoration:none">Đăng nhập để bình luận?</a></p>
        <?php

            }
        ?>
        
        <div class="cmt__content--cmt">
            <?php
            foreach ($list_Cmt as $row) {
            ?>
                <div class="cmt__block">
                    <span><?php echo $row['user_name']; ?></span><button disabled="disabled"><?php echo $row['date_cmt'] ?></button>
                    <p><?php echo $row['content']; ?></p>
                </div>

            <?php
            }
            ?>
        </div>


    </div>
</div>