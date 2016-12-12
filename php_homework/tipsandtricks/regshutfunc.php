<?php

$start_time = microtime(true);

register_shutdown_function('my_shutdown');

function my_shutdown() {
    global $start_time;

    echo "execution took: ".
            (microtime(true) - $start_time).
            " seconds.";
}

?>
