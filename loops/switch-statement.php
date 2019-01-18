<?php

    $day = 'Saturday';

    switch($day){

        case 'Saturday';
        case 'Sunday';
            echo 'It\'s a weekend.';  //In case of Saturday and Sunday.
        break;
        default;
            echo 'Not a weekend';     //In all other cases.
        break;

    }

?>