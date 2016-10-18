<?php

$base = array("1", "2", "3", "4");
$rp = array(0 => "8", 4 => "7");
$rp2 = array(0 => "6");

$numbers = array_replace($base, $rp, $rp2);
print_r($numbers);

?>
