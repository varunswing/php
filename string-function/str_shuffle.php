<?php 

    $string = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $string_shuffled = str_shuffle($string);

    $half = substr($string_shuffled, 0, strlen($string)/2); //1st parameter is string to be taken ,2nd parameter is position of string to start considering, 3rd parameter is position of string to stop considering.

    echo $half;

?>