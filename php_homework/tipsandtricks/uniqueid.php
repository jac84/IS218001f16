<?php

//generate unique string
echo uniqid();
echo '<br>';
echo uniqid('foo_'); //with prefix
echo '<br>';
echo uniqid('', true); //with more entropy
echo '<br>';
echo uniqid('bar_', true); //with both

?>
