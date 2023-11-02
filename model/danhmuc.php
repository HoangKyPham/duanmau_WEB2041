<?php 
    function insert_Cate($cate_name){
        $sql = "INSERT INTO categories VALUE(null,'$cate_name')";
        pdo_execute($sql);
    }

    function query_CateUpdate($cate_id) {
        $sql = "select * from categories where cate_id = ".$cate_id;
        $result=pdo_query_one($sql);
        return $result;
    }

    function update_Cate($cate_id, $cate_name) {
        $sql = "update categories set cate_name = '$cate_name'where cate_id = '$cate_id'";
        pdo_execute($sql);
    }

    function delete_Cate($cate_id)  {
        $sql = "delete from categories where cate_id = '$cate_id'";
        pdo_execute($sql);
    }

    function show_list_cate(){
        $sql= "SELECT categories.*, COUNT(products.pro_id) 'soluong' , MIN(price) 'gia_MIN',MAX(price) 'gia_MAX',AVG(price) 'gia_TB' 
               FROM categories 
               LEFT JOiN products ON categories.cate_id = products.cate_id
               GROUP BY categories.cate_id,categories.cate_name
               ORDER BY soluong DESC";
        $result = pdo_query($sql);
        return $result;
    }

?>