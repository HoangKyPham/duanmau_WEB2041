<?php 
function show_Pro() {
    $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) 'soluong'
    FROM products
    INNER JOIN categories ON products.cate_id = categories.cate_id
    LEFT JOIN comment ON products.pro_id = comment.pro_id
    GROUP BY products.pro_id ORDER BY soluong DESC
     ";
    $result=pdo_query($sql);
    return $result;
}

//CRUD product
function insert_Pro($pro_name,$price,$name_img,$description,$cate_id){
    $sql = "insert into products value(null,'$pro_name',$price,'$name_img','$description',$cate_id)";
    pdo_execute($sql);
}

function query_updatePro($pro_id){
    $sql = "select * from products where pro_id = $pro_id";
    $result=pdo_query_one($sql);
    return $result;
}

function update_Pro($pro_id,$pro_name,$price,$name_img,$description,$cate_id){
    $sql = "update products set pro_name='$pro_name',image='$name_img',price=$price,description='$description',
    cate_id = '$cate_id' where pro_id = $pro_id ";
    pdo_execute($sql);
}

function delete_Pro($pro_id){
    $sql = "delete from products where pro_id = $pro_id";
    pdo_execute($sql);
}


// chi tiet san pham
function detail_Item($pro_id) {
    $sql = "SELECT products.*, categories.cate_name
    FROM products
    INNER JOIN categories ON products.cate_id = categories.cate_id WHERE products.pro_id = $pro_id";
    $result=pdo_query_one($sql);
    return $result;
}
//show pro theo danh muc
function show_Pro_Cate($cate_id) {
    $sql = "SELECT *
    FROM products
    WHERE cate_id = ".$cate_id;
    $result=pdo_query($sql);
    return $result;
}

//show san pham moi trang chu
function show_Pro_New(){
    $sql = "select * from products order by pro_id desc limit 6 ";
    $result = pdo_query($sql);
    return $result;
}

//show product with keywords
function show_Pro_Key($keyw = "") {
    $sql = "SELECT products.*, categories.cate_name, COUNT(comment.pro_id) AS soluong
    FROM products
    INNER JOIN categories ON products.cate_id = categories.cate_id
    LEFT JOIN comment ON products.pro_id = comment.pro_id
    WHERE products.pro_name LIKE '%$keyw%'
    GROUP BY products.pro_id
    ORDER BY soluong DESC;";
    $result = pdo_query($sql);
    return $result;
}


?>