<?php

    $string = 'This is a <img src="image.jpg"> string.';
    $string_slashes = htmlentities(addslashes($string)); // addslashes is used to add slashes before ("", '', \, new line).

    echo stripslashes($string_slashes); // It is used to remove slashes due to addslashes.

?>    