<?php

//strips HTML and PHP tags from a string

$str = '<p>This <i>sentence</i> normally has <u><b>HTML Tags</b></u></p>';
echo $str;

echo strip_tags($str);

?>
