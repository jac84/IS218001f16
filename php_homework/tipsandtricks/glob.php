<?php

//glob() -> searches for all pathnames matching a string pattern in the local dir
//and adds them into an array

$phpFiles = glob('*.php'); //searches for all php files

//can also search for multiple file types
//eg: glob('*.{php,txt}', GLOB_BRACE)

print_r($phpFiles);

?>
