<?php

require 'connect.inc.php';

?>

<form action="database.php" method="GET">
Choose a food type:
<select name="uh">
<option value="h">Healthy</option>
<option value="u">Unhealthy</option>
</select><br><br>
<input type="submit" value="Submit"> <br> <br>

<?php

if(isset($_GET['uh'])&&!empty($_GET['uh'])){
$uh= strtolower($_GET['uh']);

if($uh=='u'||$uh=='h'){
 $query="SELECT `food`,`calories` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER By `id` DESC";
 
 if($query_run=mysqli_query($mysql_connect,$query)){
  if(mysqli_num_rows($query_run)==NULL){
   echo 'No results found.';
   }else{
     while($query_row=mysqli_fetch_assoc($query_run)){
      $food=$query_row['food'];
      $calories=$query_row['calories'];
      echo $food.' has '.$calories.' calories.<br>';
      }
   }
 } else{echo mysqli_error();}
}else{echo 'Must be u or h';}
}

?>