<?php
    $string_one = 'This is my essay. I\'m going to be talking about php.';
    $string_two = 'My essay is about cats, I\'ll be talking about cats.';
    similar_text ($string_one, $string_two, $result);
    echo 'The similarity between is, '.$result.'%' ;
?>    