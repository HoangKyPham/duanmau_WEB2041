
         <form action="index.php?act=show_list_cate" method="post">
            <input type="text" name="cate_name" id="">
            <input type="submit" value="them danh muc" name = "btn_add">
         </form>

         <table border=1 width = "100%">
                <tr>
                    <td>Mã</td>
                    <td>Tên danh mục sản phẩm</td>
                    <td>Số lượng</td>
                    <td>Giá nhỏ nhất</td>
                    <td>Giá lớn nhất</td>
                    <td>Giá trung bình</td>
                </tr>
                <?php
                foreach ($list_statistical as $row) {
                    extract($row);
                ?>
                    <tr>
                        <td><?php echo $cate_id; ?></td>
                        <td><?php echo $cate_name; ?></td>
                        <td><?php echo $soluong; ?></td>
                        <td><?php echo $gia_MIN; ?></td>
                        <td><?php echo $gia_MAX; ?></td>
                        <td><?php echo $gia_TB; ?></td>
                        <td><a href="index.php?act=updateCate&id_cate=<?php echo $row['cate_id']; ?>">Sua</a></td>
                        <td><a href="index.php?act=deleteCate&id_cate=<?php echo $row['cate_id']; ?>" onclick=" return confirmDelete()">Xoa</a></td>
                    </tr>
                <?php
                }
                ?>

        </table>

