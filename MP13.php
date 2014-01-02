<?php

//Pushes and pops string in a stack

    $fruits = array(Lemon, Orange, Apple, Banana, Grapes, Rambutan, Cherry, Pineapple, Peach, Mango);
    
    var_dump($fruits);
    
    echo "Choices:\n1 - Push string to stack \n2 - Pop string to stack\n";
    
    echo "Choice: ";
    $readChoice = fgets(STDIN);
    
    if($readChoice == 1){
        echo "Enter fruit name: ";
        $readPushStr = fgets(STDIN);
        array_push($fruits, $readPushStr);
        print_r($fruits);
    }
    if($readChoice == 2){
        array_pop($fruits);
        print_r($fruits);
    }

?>