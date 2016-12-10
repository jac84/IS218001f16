<?php

//getrusage() -> gets data returned from the system call
//not avaiable on windows platforms? works fine on chrome
//will have different output on windows

print_r(getrusage());

?>
