/*$GLOBALS references all variables in a global scope
  an associative array containing references to all variables which are
  currently defined in the global scope of the script
  var names are keys of the array
  */

<?php

function globalTest(){
  $v = "local var";

  echo '$v in global scope: ' . $GLOBAL["v"] . "\n"; //calls global $v rather than local $v
  echo '$v in current scope: ' . $v . "\n"; //calls local $v
}

$v = "Example content"
globalTest();

?>
