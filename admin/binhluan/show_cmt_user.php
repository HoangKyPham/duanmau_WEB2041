
         <a href="index.php?act=show_list_cmt">Back</a>
         <table border=1 width = "100%">
                <tr>
                    <td>Comment ID</td>
                    <td>User ID</td>
                    <td>Username</td>
                    <td>Content </td>
                    <td>Sản phẩm bình luận</td>
                    <td>Ngày</td>
                </tr>
                <?php
                extract($list_cmt);
                foreach ($list_cmt as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['cmt_id']; ?></td>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['content']; ?></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><?php echo $row['date_cmt']; ?></td>
                        <td><a href="index.php?act=delete_cmt&id_cmt=<?php echo $row['cmt_id']; ?>" onclick=" return confirmDelete()">Xoa</a></td>
                    </tr>
                <?php
                }
                ?>

        </table>

