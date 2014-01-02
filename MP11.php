<?php

    //Replaces string brown to blue in the given sentence.

    echo "Given sentence: ";
    $sentence = 'The quick brown fox jumps over the lazy dog near the bank of the river.';
    echo $sentence;
    echo "\n";
    
    $search = 'brown';
    $replace = 'blue';
    
    $new = str_replace($search, $replace, $sentence);
    echo "New sentence: ";
    echo $new;
    
?>