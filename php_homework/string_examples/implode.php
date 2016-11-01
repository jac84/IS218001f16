<?php

//join array elements with a string

$arr = array('This', 'will', 'be', 'a', 'sentence.');
$addSpc = implode(" ", $arr);

print_r($arr);
echo '<br>';
echo $addSpc;

?>
