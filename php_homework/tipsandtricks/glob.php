<?php

//glob() -> searches for all pathnames matching a string pattern in the local dir
//and adds them into an array

$phpFiles = glob('*.php'); //searches for all php files

//can also search for multiple file types
//eg: glob('*.{php,txt}', GLOB_BRACE)

//can also search with a path
//eg: glob('.../images/a*.jpg');

print_r($phpFiles);

?>
