<?php

//Sort integers stored in an array

    echo "Enter 10 integers to be sorted\n";
    echo "Integer 1: ";
    $readInt1 = fgets(STDIN);
    echo "Integer 2: ";
    $readInt2 = fgets(STDIN);
    echo "Integer 3: ";
    $readInt3 = fgets(STDIN);
    echo "Integer 4: ";
    $readInt4 = fgets(STDIN);
    echo "Integer 5: ";
    $readInt5 = fgets(STDIN);
    echo "Integer 6: ";
    $readInt6 = fgets(STDIN);
    echo "Integer 7: ";
    $readInt7 = fgets(STDIN);
    echo "Integer 8: ";
    $readInt8 = fgets(STDIN);
    echo "Integer 9: ";
    $readInt9 = fgets(STDIN);
    echo "Integer 10: ";
    $readInt10 = fgets(STDIN);
    $arrayInt = array((int)$readInt1, (int)$readInt2, (int)$readInt3, (int)$readInt4, (int)$readInt5, (int)$readInt6, (int)$readInt7, (int)$readInt8, (int)$readInt9, (int)$readInt10);
    sort($arrayInt);
    
    echo "Sorted array: \n";
    
    $clength=count($arrayInt);

    for($x=0;$x<$clength;$x++){
        echo $arrayInt[$x];
        echo "\n";
    }

?>