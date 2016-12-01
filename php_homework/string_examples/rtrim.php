<?php

//strip trailing whitespace or other characters

$str = "Hello World!....";
echo $str . '<br>';
echo rtrim($str, ".");

?>
