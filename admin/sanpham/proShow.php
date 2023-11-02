<?php  
    if (is_array($result)) {
        extract($result);
    }
?>
       <h1>Sản phẩm</h1>
            <a href="index.php?act=addPro">Thêm sản phẩm</a>
            <table border="1px" width="100%">
                <tr>
                    <td>Mã sản phẩm</td>
                    <td>Tên sản phẩm</td>
                    <td>Ảnh sản phẩm</td>
                    <td>Giá</td>
                    <td>Danh mục</td>
                    <td>Lượt bình luận</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                foreach ($result as  $row) {
                ?>
                    <tr>
                        <td><?php echo $row['pro_id']; ?></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><img src="../Assets/img/<?php echo $row['image']; ?>" alt="" srcset="" width="100px"></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['cate_name']; ?></td>
                        <td><?php echo $row['soluong']; ?></td>
                        <td><a href="index.php?act=update_Pro&id_pro=<?php echo $row['pro_id']; ?>">Sua</a></td>
                        <td><a href="index.php?act=delete_Pro&id_pro=<?php echo $row['pro_id']; ?>" onclick=" return confirmDelete()">Xoa</a></td>

                    </tr>
                <?php
                }
                ?>

