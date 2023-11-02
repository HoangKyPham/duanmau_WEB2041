<?php 
    if (is_array($result)) {
        extract($result);
    }
?>
<form action="index.php?act=updateCategory" method="post">
    <input type="hidden" name="cate_id" value="<?php echo $result['cate_id'] ?>">
    <input type="text" name="cate_name" id="" value="<?php echo $result['cate_name'] ?>">
    <input type="submit" value="Cap nhat danh muc" name="btn_update">
</form>