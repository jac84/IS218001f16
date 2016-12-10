<?php
// func_get_args() -> get array of function's args list

//args list can be empty
function foo(){
  //returns array of all passed args
  $args = func_get_args();

  foreach ($args as $k => $v) {
    echo "arg".($k+1).": $v\n";
  }
}

foo(); //nothing prints

foo('hello'); //prints "arg1: hello"
echo '<br>';
foo('hello','world','again'); //prints "arg1: hello arg2: world arg3: again"
 ?>
