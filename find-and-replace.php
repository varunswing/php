<?php

    $offset = 0;

    if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){
        $text = $_POST['text'];
        $search = $_POST['searchfor'];
        $replace = $_POST['replacewith'];
        $search_length = strlen($search);

        if(!empty($text) && !empty($search) && !empty($replace)){
            if($strpos = strpos($text, $search, $offset)){
                $offset = $strpos + $search_length;
                $text = substr_replace($text, $replace, $strpos, $search_length);
            }   echo $text;
        }else{
            echo 'Please fill in all fields.';
        }
    }

?>

<form action="find-and-replace.php" method="POST">
<textarea name="text" cols="30" rows="10" placeholder="Enter the text here..."></textarea><br><br>
Search for:<br><input type="text" name="searchfor"><br><br>
Replace with:<br><input type="text" name="replacewith"><br><br>
<input type="submit" value="Find and Replace">
</form>