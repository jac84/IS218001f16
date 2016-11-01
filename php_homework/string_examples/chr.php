<?php

//returns a single character from a string as a string specified by ASCII

//example1: using chr() function
$str1 = "The string ends in escape: ";
$str1 .= chr(27); //adds escape char at end of $str1

echo $str1;

echo '<br>';
$str1 = sprintf("The string ends in escape: %c", 27);
echo $str1;

echo '<br>';

//example2 Overflow behavior
echo chr(-159), chr(633), PHP_EOL; //PHP_EOL defines the end of a line. useful for filesystem files
//i meant to write 833 not 633 but it returned 'ay' so ayyyy
?>
