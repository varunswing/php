<?php

    $day = 'Saturday';
    $date = 5;
    $year = 2019;

    echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>'; //(.' '.) is used for concatenation of variables and ' at last is used to concatenate html tags.
    echo "<br>The date is <strong> $day $date $year <strong>"; // Under double quotes variables and html tags are directly concatenated.

?>
