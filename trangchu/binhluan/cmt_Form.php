<?php
session_start();
include '../../model/pdo.php';
include '../../model/comment.php';
$result = $_SESSION['user'];
$id_user = $result['user_id'];
$id_pro = $_REQUEST['id_pro'];
var_dump($id_pro);
$list_Cmt=show_Cmt_Query($id_pro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Assets/css/product.css">
</head>
<body>
    <div>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="pro_id" id="" value="<?php echo $id_pro; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id_user; ?>">
            <input type="text" name="content" id="" value="">
            <input type="submit" value="Gui binh luan" name="btn_cmt">
        </form>
        <div>
            <?php 
                 foreach ($list_Cmt as $row) {
            ?>    
            <span><?php echo $row['user_name']; ?></span><button disabled="disabled"><?php echo $row['date_cmt'] ?></button>
            <p><?php echo $row['content']; ?></p>    
            <?php
                }
            ?>
        </div>
        
        <?php
        if (isset($_POST['btn_cmt']) && ($_POST['btn_cmt'])) {
            $content = $_POST['content'];
            $pro_id = $_POST['pro_id'];
            $user_id = $_POST['user_id'];
            $date = date('Y-m-d');
            insert_Cmt($content, $user_id, $pro_id, $date);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>

</body>

</html>