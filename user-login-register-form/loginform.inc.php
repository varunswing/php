<?php

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string ($mysql_connect, $_POST['username']);
        $password = mysqli_real_escape_string ($mysql_connect, $_POST['password']);

        $password_hash =  mysqli_real_escape_string ($mysql_connect, md5($password));

        if(!empty($username) && !empty($password)){
            $query = "SELECT `id` FROM `users` WHERE `username` ='$username' AND `password` = '$password' "; //error can be in comma.
            if($query_run = mysqli_query($mysql_connect, $query)){
                $query_num_rows = mysqli_num_rows($query_run);

                if($query_num_rows == 0){
                    echo 'Invalid username/password combination.';
                }else if($query_num_rows == 1){
                    $user_id = mysqli_fetch_assoc($query_run);
                    $_SESSION['user_id'] = $user_id;
                    header ('Location: index.php');
                }
            }
        
        }else{
            echo 'You must supply a username and password.';
        }
    }

?>

<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type="text" name="username">
Passowrd: <input type="password" name="password">
<input type="submit" value="Log in">
</form>