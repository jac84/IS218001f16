<?php

// a complex array
$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);

// convert to a string
$string = serialize($myvar);

echo $string; //prints serialized array

// you can reproduce the original variable
$newvar = unserialize($string);

print_r($newvar); //prints original array

echo '<br><br>';

/* With PHP 5.3, JSON support is now included*/
$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);

// convert to a string
$string = json_encode($myvar);

echo $string;

// you can reproduce the original variable
$newvar = json_decode($string);

print_r($newvar);

?>
