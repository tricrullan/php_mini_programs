<?php

//Checks if integer is an odd or an even number

    echo "Enter integer: ";
    $readInt = fgets(STDIN);
    
    if($readInt % 2 == 0)
        echo "This is an even integer.\n";
    else
        echo "This is an odd integer. \n";

?>