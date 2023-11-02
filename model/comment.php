<?php 
    function insert_Cmt($content, $user_id,$pro_id,$date){
        $sql = "insert into comment(content,user_id,pro_id,date_cmt) values('$content','$user_id','$pro_id','$date')";
        pdo_execute($sql);
    }

    function show_Cmt_Query($id_pro) {
        $sql = "SELECT comment.*, users.*
        FROM comment
        INNER JOIN users ON comment.user_id = users.user_id
        WHERE comment.pro_id = " . $id_pro . " ORDER BY comment.cmt_id DESC";
        $result = pdo_query($sql);
        return $result;
    }
    
    //admin

    function show_list_cmt_user() {
        $sql ="SELECT comment.*, users.*,products.*
        FROM comment
        INNER JOIN products ON comment.pro_id = products.pro_id
        INNER JOIN users ON comment.user_id = users.user_id
        ";
        $list_cmt = pdo_query($sql);
        return $list_cmt;
    }
    function show_list_cmt() {
        $sql ="SELECT COUNT(comment.cmt_id) 'so_luong_cmt', users.*,COUNT(DISTINCT products.pro_id) as 'so_sp'
        FROM comment
        INNER JOIN products ON comment.pro_id = products.pro_id
        INNER JOIN users ON comment.user_id = users.user_id
        GROUP BY users.user_id ORDER BY so_luong_cmt DESC
        ";
        $list_cmt = pdo_query($sql);
        return $list_cmt;
    }


    function delete_cmt($cmt_id){
        $sql = "delete from comment where cmt_id = $cmt_id";
        pdo_execute($sql);
    }
    

?>