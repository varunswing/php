<?php

require 'connect.inc.php';

?>

<form action="user.php" method="GET">
Choose a id:
<select name="id">
<option value="1">Varun</option>
<option value="2">Vipul</option>
</select><br><br>
<input type="submit" value="Submit"> <br> <br>

<?php

if(isset($_GET['id'])&&!empty($_GET['id'])){
$id= $_GET['id'];

if($id=='1'||$id=='2'){
 $query="SELECT `firstname`,`secondname`,`password` FROM `users` WHERE `id`='$id' ORDER By `id` DESC";
 
 if($query_run=mysqli_query($mysql_connect,$query)){
  if(mysqli_num_rows($query_run)==NULL){
   echo 'No results found.';
   }else{
     while($query_row=mysqli_fetch_assoc($query_run)){
      $firstname=$query_row['firstname'];
      $secondname=$query_row['secondname'];
      $password=$query_row['password'];
      echo $firstname.' '.$secondname.' \'s password is '.$password.'<br>';
      }
   }
 } else{echo mysqli_error();}
}else{echo 'Must be 1 or 2';}
}

?>