<?php

    $time = time();
    $date = date('d:m:y @D:M:Y @H:i:s', $time); //For more imformation on date function in php visit PHP Docs-to-go.

    echo 'The current date and time is '.$date; //We can set our default time zone from php.ini file, and can also use strtotime('+1 week) function.

?>