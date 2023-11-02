
         
         <table border=1 width = "100%">
                <tr>
                    <td>Mã tài khoản</td>
                    <td>Username</td>
                    <td>Pass</td>
                    <td>Email</td>
                </tr>
                <?php
                extract($list_users);
                foreach ($list_users as $row) {
                ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><a href="index.php?act=edit_query_user&id_user=<?php echo $row['user_id']; ?>">Sua</a></td>
                        <td><a href="index.php?act=delete_User&id_user=<?php echo $row['user_id']; ?>" onclick=" return confirmDelete()">Xoa</a></td>
                    </tr>
                <?php
                }
                ?>

        </table>

