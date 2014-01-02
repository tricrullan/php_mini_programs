<?php
//Count the number of characters of the entered string

echo "Enter string: ";
$readText = fgets(STDIN);
$charCount = mb_strlen($readText);
echo "Character count: $charCount \n";
?>