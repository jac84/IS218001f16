<?php

//chunk_split is used to split strings into chunks

$str = "This is an example string";

echo chunk_split($str, 2, "."); //splits $str after 2 chars and adds a "." after each split

?>
