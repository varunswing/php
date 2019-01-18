<?php

    $name=htmlentities($_GET['name']);  //$name=$_GET['name'];  html tags can be entered here!
    echo $name;

?>

<form action="myfirstfile.php" method="GET">
<input type="text" name="name">
</form>