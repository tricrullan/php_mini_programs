<?php
//Converts binary To decimal

    echo "Input binary to be converted into decimal: ";
    $readBinary = fgets(STDIN);

    $binaryToDec = bindec($readBinary);
    echo "Decimal: ";
    echo $binaryToDec;
    echo "\n";

?>