<?php

$array = array('blue', 'red', 'green', 'red');
print_r($array);

print_r('<br>');

$key = array_search('green', $array);
print_r('Key for green is: ' . $key);

?>
