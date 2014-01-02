<?php
//Check if string is palindrome

echo "String to check if it is a palindrome: ";
$readString1 = fgets(STDIN);

$a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$readString1));

if($a==strrev($a)){
    echo "String is a palindrome. \n";
}else{
    echo "String is not palindrome. \n";
}
?>