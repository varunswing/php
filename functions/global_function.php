<?php

    $user_ip = $_SERVER{'REMOTE_ADDR'}; // Program to know Ip address of page.

    function echo_ip(){
        global $user_ip;
        $string = 'Your IP address is: '.$user_ip;
        echo $string;
    }

    echo_ip();

?>