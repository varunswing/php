<?php

    ob_start();
    session_start();
    $current_file = $_SERVER['SCRIPT_NAME'];

    if(isset($_SERVER['HTTP_REFERER'])&& !empty($_SERVER['HTTP_REFERER'])){
        $http_referer = $_SERVER['HTTP_REFERER'];
    }
   
    function loggedin(){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }

    function getuserfield($field){
        $query = "SELECT `$field` FROM `users` WHERE `id` = '". $_SESSION['user_id'] ."'";
        if ($query_run = mysqli_query($mysql_connect, $query)){
            if($query_result = mysqli_fetch_assoc($query_run)){
                return $query_result;
            }
        }
    }

?>