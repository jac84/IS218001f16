<?php

//converts special HTML entities back to chars

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text";
echo htmlspecialchars_decode($str);

?>
