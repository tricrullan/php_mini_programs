<?php

//Sort string stored in an array

    echo "Enter 10 strings to be sorted\n";
    echo "String 1: ";
    $readStr1 = fgets(STDIN);
    echo "String 2: ";
    $readStr2 = fgets(STDIN);
    echo "String 3: ";
    $readStr3 = fgets(STDIN);
    echo "String 4: ";
    $readStr4 = fgets(STDIN);
    echo "String 5: ";
    $readStr5 = fgets(STDIN);
    echo "String 6: ";
    $readStr6 = fgets(STDIN);
    echo "String 7: ";
    $readStr7 = fgets(STDIN);
    echo "String 8: ";
    $readStr8 = fgets(STDIN);
    echo "String 9: ";
    $readStr9 = fgets(STDIN);
    echo "String 10: ";
    $readStr10 = fgets(STDIN);

    $strInt = array((string)$readStr1, (string)$readStr2, (string)$readStr3, (string)$readStr4, (string)$readStr5, (string)$readStr6, (string)$readStr7, (string)$readStr8, (string)$readStr9, (string)$readStr10);
    sort($strInt);
    
    $clength=count($strInt);

    echo "Sorted strings: \n";
    
    for($x=0;$x<$clength;$x++){
        echo $strInt[$x];
    }

?>