<?php

$conn_error ='Could not connect';

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='a_database';

$mysql_connect=mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db); 

if(!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)){
die($conn_error);
}

?>
