<!-- Slider -->
<div class="slider">
    <a href="#"><img src="./Assets/img/banner.jpg" alt="Slider"></a>
</div>
    

<!-- Chữ chạy -->
<div class="article">
    <marquee directionma=”down”>
        <h3 class="chuchay">Nhập code khi thanh toán để nhận Giảm
            10.000.000₫ cho toàn bộ sản phẩm với Tổng giá trị đơn hàng từ 189.999,000₫.</h3>
    </marquee>
    <!-- Sản Phẩm -->
    <div class="news-item">
        <?php
        foreach ($result_New as $row) {
            extract($row);
        ?>
            <div class="item">
                <a href="index.php?act=detail_Item&id_pro=<?php echo $row['pro_id']; ?>"><img src="Assets/img/<?php echo $row['image']; ?>"></a>
                <a href="index.php?act=detail_Item&id_pro=<?php echo $row['pro_id']; ?>">
                    <p class="content"><?php echo $row['pro_name']; ?></p>
                </a>
                <p class="content1"><?php echo $row['price']; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- box xem tất cả -->
    <div class="box-btn">
        <input type="button" onclick="alert('Từng đấy đồ mua chưa đủ nữa hả. Rồi lại tính đặt loạn rồi bom hàng à. Nhờn!!!')" class="btn" value="Xem tất cả" />
    </div>
</div>