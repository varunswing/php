<?php

    require 'core.inc.php';
    require 'connect.inc.php';

    if(!loggedin()){

        if(isset($_POST['username']) && isset($_POST['Password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){

            $username =  mysqli_real_escape_string ($mysql_connect, $_POST['username']);
            $password =  mysqli_real_escape_string ($mysql_connect, $_POST['password']);
            $password_again =  mysqli_real_escape_string ($mysql_connect, $_POST['password_again']); //can have error here.
            $password_hash =  mysqli_real_escape_string ($mysql_connect, md5($password)); 
            
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];

            if(!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)){
                if(strlen($username)>30 || strlen($firstname)>40 || strlen($surname)>40){
                    echo 'Please ahear to maxlength of fields.';
                }else{
                    if($password!=$password_again){
                        echo 'Password do not match!';
                    }else{
                        
                        $query = "SELECT `username` FROM `users` WHERE `username`='$username'";
                        $query_run = mysqli_query($mysql_connect, $query);

                        if(mysqli_num_rows($query_run)==1){
                            echo 'The username '.$username.' already exists.';
                        }else{
                            $query = "INSERT INTO 'users' VALUES('', '$username', '$username', '$password_hash', '$firstname', '$surname') ";
                            if($query_run=mysqli_query($mysql_connect, $query)){
                                header('Location: registration_success.php');
                            }else{
                                echo 'Sorry, we couldn\'t register you at this time. Try again Later.';
                            }
                        }

                    }
            }
        }else{
            echo 'All fields are required.';
        }
    }
}else{
    echo 'You\'ve already registered and logged in.';
}

?>

<form action="registration.php" method="POST">
Username:<br><input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>"><br><br>
Password:<br><input type="password" name="password"><br><br>
Confirm Password:<br><input type="password" name="password_again"><br><br>
Firstname:<br><input type="text" name="firstname" value="<?php if(isset($firstname)) echo $firstname; ?>"><br><br>
Surname:<br><input type="text" name="surname" value="<?php if(isset($surname)) echo $surname; ?>"><br><br>
<input type="submit" value="Register">
</form>
