<?php

//convert all applicable characters to HTML entities

$str = "One of these words is <b>bold</b>";
echo $str;
echo '<br>';
echo htmlentities($str);

?>
