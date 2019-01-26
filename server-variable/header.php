<?php

    $script_name = $_SERVER['SCRIPT_NAME'];
    $host_name = $_SERVER['HTTP_HOST'];

    echo "The url is '$script_name'. <br>";
    echo "The host name is '$host_name'.";

?>

<form action="<?php echo $script_name; ?>" method="POST">
<input type="submit" name="Submit">
</form>