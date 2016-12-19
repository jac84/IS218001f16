<?php
//used to identify a user. basically cookies in a browser
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time(), (86400*30), "/"); //86400 = 1 day
?>

<html>
<body>
<h1>_cookie globals test</h1>

<?php

if(!isset($_COOKIE[$cookie_name])){
  echo "Cookie named " . $cookie_name . " is not set!";
} else {
  echo "Cookie " . $cookie_name . " is set! <br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

?>

</body>
</html>
