<?php

//Evaluates expressions
    echo "Two integers will be entered which will be evaluated. \n";
    echo "Enter integer 1: ";
    $readInt1 = fgets(STDIN);
    echo "Enter integer 2: ";
    $readInt2 = fgets(STDIN);
    
    echo "1 - Add \n2 - Subtract \n3 - Multiply \n4 - Divide\n5 - Modulo \n";
    echo "Choice: ";
    $readOperation = fgets(STDIN);
    
    if($readOperation > 0 && $readOperation < 6){
        switch($readOperation){
            case(1): echo "Result: ";
                     echo $readInt1 + $readInt2;
                     echo "\n";
                     break;
            case(2): echo "Result: ";
                     echo $readInt1 - $readInt2;
                     echo "\n";
                     break;
            case(3): echo "Result: ";
                     echo $readInt1 * $readInt2;
                     echo "\n";
                     break;
            case(4): echo "Result: ";
                     echo $readInt1 / $readInt2;
                     echo "\n";
                     break;
            case(5): echo "Result: ";
                     echo $readInt1 % $readInt2;
                     echo "\n";
                     break;
        print "\n";
        }
    }else{
        echo "Invalid input.";
     }
     

?>