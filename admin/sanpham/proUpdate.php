<style>
    form {
        display: flex;
        flex-direction: column;
        width: 100%;

    }

    form input {
        margin-top: 4px;
        height: 40px;

    }

</style>

<?php
extract($result);
?>

<h1>Sửa sản phẩm</h1>
<form action="index.php?act=update_Product" method="post" enctype="multipart/form-data">
    <input type="hidden" name="pro_id" value="<?php echo $result['pro_id']; ?>">
    <p>Tên sản phẩm</p><input type="text" name="pro_name" id="" value="<?php echo $result['pro_name']; ?>">
    <p>Ảnh sản phẩm</p><img src="../Assets/img/<?php echo $result['image']; ?>" alt="" srcset="" width="250px">
    <input type="file" name="img_pro" id="">
    <p>Giá</p><input type="text" name="price" id="" value="<?php echo $result['price']; ?>">
    <p>Chi tiết sản phẩm</p>
    <textarea name="editor" id="" cols="30" rows="10"><?php echo $result['description']; ?></textarea>
    <p>Danh mục sản phẩm</p>
    <select name="cate_id" id="">
        <?php
        include_once '../model/pdo.php';
        $sql_cate = "select * from categories";
        $result_cate = pdo_query($sql_cate);
        foreach ($result_cate as $row_cate) {
        ?>
            <option value="<?php echo $row_cate['cate_id']; ?>" <?php if ($row_cate['cate_id'] == $result['cate_id'])   echo 'selected'; ?>>
                <?php echo $row_cate['cate_name']; ?>
            </option>
        <?php
        }
        ?>
    </select><br>
    <div class="btn--edit">
        <input type="submit" value="Sua san pham" name="btn_update">
    </div>

</form>
<script>
    CKEDITOR.replace('editor');
</script>