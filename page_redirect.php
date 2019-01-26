<?php

    ob_start(); // It is used to use header(h1, etc) before header function.

?>

<h1>My page</h1>
This is my page.

<?php

    $redirect_page = 'http://google.co.uk';
    $redirect = true;

    if($redirect == true){
        header('location:'.$redirect_page);
    }

    ob_end_flush(); //ob_end_clean(); is used to empty whole page whereas ob_end_flush(); clears only error results

?>