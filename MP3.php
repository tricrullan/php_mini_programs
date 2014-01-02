<?php
//Search string in a group of strings/sentence/phrases

echo "Enter sentence/phrases: ";
$readString1 = fgets(STDIN);

echo "Enter string to search: ";
$readString2 = fgets(STDIN);
if (strpos($readString1, $readString2) !== false) {
    echo "String found. \n";
}else{
    echo "String not found. \n";
}

?>