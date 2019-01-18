<?php

    $string = 'This is an example string.';
    $string_word_count = str_word_count($string, 0); //Count and echo the number of words in string.

    echo ($string_word_count);

?>
<br>
<?php

    $string = 'This is an example string.';
    $string_word_count = str_word_count($string, 1); //Shows the postion of word with the word in array form.

    print_r ($string_word_count);//print_r is used to print array value.

?>
<br>
<?php

    $string = 'This is an example string.';
    $string_word_count = str_word_count($string, 2);//Shows positions of each characters with the words.

    print_r ($string_word_count);

?>
<br>
<?php

    $string = 'This is an example string.';
    $string_word_count = str_word_count($string, 1, '.');//Shows the characters which are not shown by default.

    print_r ($string_word_count);

?>