<?php 
    function insert_Users($user, $pass,$email_to){
        $sql = "insert into users value(null,'$user','$pass','$email_to')";
        pdo_execute($sql);
    }

    function sign_Users($user,$pass){
        $sql ="select * from users where user_name = '$user' and pass = '$pass'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function restore_Pass($user_id,$new_pass){
        $sql ="update users set pass= '$new_pass' WHERE user_id = '$user_id'";
        pdo_execute($sql);
    }

    function edit_query_user($user_id){
        $sql = "select * from users where user_id = '$user_id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_Users($user_id,$user_name,$pass,$email){
        $sql ="update users set user_name='$user_name',pass='$pass',email='$email' where user_id='$user_id'";
        pdo_execute($sql);
    }

    function show_list_users(){
        $sql = "select * from users";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_User($user_id){
        $sql = "delete from users where user_id = $user_id";
        pdo_execute($sql);
    }
    
    
   
    

?>