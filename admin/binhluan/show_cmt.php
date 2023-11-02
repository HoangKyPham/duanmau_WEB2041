
         
         <table border=1 width = "100%">
                <tr>
                    <td>User_id</td>
                    <td>Name </td>
                    <td>Số lượng comment</td>
                    <td>Số sản phẩm đã comment</td>
                </tr>
                <?php
                extract($list_cmt);
                foreach ($list_cmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['so_luong_cmt']; ?></td>
                        <td><?php echo $row['so_sp']; ?></td>
                        <td><a id="btn--act" href="index.php?act=show_list_cmt_user&id_cmt=<?php echo $row['user_id']; ?>">Chi tiết</a></td>
                    </tr>
                <?php
                }
                ?>

        </table>

