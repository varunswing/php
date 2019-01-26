<?php

    if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
        $day = $_GET['day']; //Get variable is used to include content in url.
        $month = $_GET['month'];
        $year = $_GET['year'];

        if (!empty($day) && !empty($month) && !empty($year)){
            echo 'It is '.$day.'/'.$month.'/'.$year;
        }else{
            echo 'Fill in all fields.';
        }
    }

?>

<form action="$_GET-variable.php" method="GET"> 
    Day: <br><input type="text" name="day"><br>
    Month:<br><input type="text" name="month"><br>
    Year:<br><input type="text" name="year"><br><br>
    <input type="submit" value="Submit">
</form>