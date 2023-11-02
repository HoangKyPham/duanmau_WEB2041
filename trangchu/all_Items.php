<div class="menu-contact">
    <a href="./index.php">Trang Chủ </a> / <p class="menu-1" id="nameCategory">Tất cả sản phẩm</p>
</div>
<div class="all-items">
    <div class="mucluc1">
        <h2 class="h2">DANH MỤC SẢN PHẨM</h2>
        <ul class="sanpham">
            <li><a href="index.php?act=all_Items&id_Cate=1" onclick="changeName('Rolex')">Rolex</a></li>
            <li><a href="index.php?act=all_Items&id_Cate=2" onclick="changeName('Patek Phillip')">Patek Phillip</a></li>
            <li><a href="index.php?act=all_Items&id_Cate=3" onclick="changeName('Richard Mile')">Richard Mile</a></li>
            <li><a href="index.php?act=all_Items&id_Cate=4">Casio</a></li>
            <li><a href="index.php?act=all_Items&id_Cate=5">Jacob & Co</a></li>
        </ul>
    </div>
    <div class="box-quanao">
        <div class="box-quanao-nav">
            <h2 class="h2">Tất cả sản phẩm</h2>
            <div>
                <label>Sắp Xếp: </label>
                <select class="luachon">
                    <option>Mặc Định</option>
                    <option>A-Z</option>
                    <option>Z-A</option>
                    <option>Giá tăng dần</option>
                    <option>Giá giảm dần</option>
                    <option>Hàng mới nhất</option>
                    <option>Hàng cũ nhất</option>
                </select>
            </div>
        </div>
        <div class="box-quanao-list">
            <div class="news-item">
                <?php
                foreach ($result as $row) {
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
        </div>
    </div>


</div>
<script>
    var cate_name = document.getElementById("nameCategory");

    function changeName(new_name) {
        cate_name.textContent = new_name;
    }
</script>