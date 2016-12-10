<?php

//glob() -> searches for all pathnames matching a string pattern in the local dir
//and adds them into an array

$phpFiles = glob('*.php'); //searches for all php files

print_r($phpFiles);

?>
