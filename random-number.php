<?php

    if(isset($_POST['roll'])){
        $rand = rand(1, 6); //getrandmax(); function is used to get maximum value of randon number.

        echo 'You rolled a '.$rand; 

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="random-number.php" method="POST">
<input type="submit" name="roll" value="Roll Dice">
</form>

</body>
</html>
