<?php

//php has a garbage collector and a memory manager
//get memory usage with memory_get_usage()
//get memory peak from script execution with memory_get_peak_usage()

echo "Initial: ". memory_get_usage(). " bytes \n"; //prints current bytes

//use some memory
for($i = 0; $i < 100000; $i++){
  $array[] = md5($i);
}
//remove half of array
for($i = 0; $i < 100000; $i++){
  unset($array[$i]);
}

echo "Final: ". memory_get_usage(). " bytes \n";
echo "Peak: ". memory_get_peak_usage(). " bytes \n";

//im guessing this is good for debugging?

?>
