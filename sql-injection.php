<?php

  $mysql_connect=mysqli_connect('localhost','root','','a_database');

  if(isset($_POST['username'])&&isset($_POST['password'])){
    $username= mysqli_real_escape_string($mysql_connect, $_POST['username']);
    $password= mysqli_real_escape_string($mysql_connect, $_POST['password']);
    if(!empty($_POST['username'])&&!empty($_POST['password'])){

      echo $username.'<br>'.$password.'<br>';
    
      $query="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password'";
      $query_run=mysqli_query($mysql_connect, $query);
    
      if (mysqli_num_rows($query_run)>=1){
        echo 'Login success';
      }else{
        echo 'Invalid username or password combination';
      }
    }

  }
                                            
?>

<form action="sql-injection.php" method="POST" >
Username:<br> <input type="text" name="username" ><br>
Password:<br> <input type="text" name="password" ><br><br>
<input type="submit" value="Submit">
</form>
