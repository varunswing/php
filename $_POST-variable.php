<?php

    $match = 'pass123';

    if(isset($_POST['password'])){
        $password = $_POST['password']; //Post variable is used to don't include the content in url.
        if(!empty($password)){
            if($password == $match){
                echo 'That is correct!';
            }else{
                echo 'That is incorrect!';
            }
        }else {
            echo 'Enter a password';
        }
    }

?>

<form action="$_POST-variable.php" method="POST">
   Password:<br>
   <input type="password" name="password"><br>
   pass123<br><br>
   <input type="submit" value="Submit">
</form>