<?php

echo 'Hello ' . htmlspecialchars($_POST["name"]) . "!";
//uses the HTTP POST method
//is preferred over GET for sending form data

?>
