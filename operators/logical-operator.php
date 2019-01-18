<?php

    $number = 499.999;
    $upper = 1000;
    $lower = 500;

    if($number>=$lower && $number<=$upper){  // In PHP AND=and=&& and OR=or=||.
        echo 'Ok';
    }else {
        echo "Number must be between $lower and $upper.";
    }

?>