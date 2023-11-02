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

    .btn--edit input {
        margin-top: 10px;
        width: 100%;
        height: 40px;
        background-color: grey;
    }
</style>

<h1>Thêm sản phẩm</h1>

<form action="index.php?act=addPro" method="post" enctype="multipart/form-data">
    <p>Tên sản phẩm</p><input type="text" name="name_pro" id="">
    <p>Ảnh sản phẩm</p><input type="file" name="pro_img" id="">
    <p>Giá</p><input type="text" name="price" id="">
    <p>Chi tiết sản phẩm</p>
    <textarea name="editor" id="" ></textarea>
    <p>Danh mục sản phẩm</p>
    <select name="cate_id" id="">
        <option value="1">Rolex</option>
        <option value="2">Patek Phillip</option>
        <option value="3">Richard mile</option>
        <option value="4">Casio</option>
        <option value="5">Jacob & Co</option>
    </select>
    <div class="btn--edit">
        <input type="submit" value="Them san pham" name="btn_insert">
    </div>

</form>
<script>
    CKEDITOR.replace('editor');
</script>