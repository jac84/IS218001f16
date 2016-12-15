<?php

/*
filter_var -> sanitizes and validates form data
sanitize -> remove illegal chars from data
validate -> determine if the data is in proper form; returns boolean

filter_var(variable you want to check, type of check to use);
can search for type of filters @ http://php.net/manual/en/filter.filters.php
*/


class FormSan{

  function sanitize($name, $email){
    echo "Name before sanitizing: ". $name . "<br />";
    echo "Name after sanitizing: ". filter_var($name, FILTER_SANITIZE_STRING) . "<br />";
    echo "<br/>";

    echo "Email before sanitizing: ". $email . "<br />";
    echo "Email after sanitizing: ". filter_var($email, FILTER_SANITIZE_EMAIL) . "<br />";
    echo "<br/><br/>";
  }

  function getSanEmail($email){
    return filter_var($email, FILTER_SANITIZE_EMAIL);
  }
  function getSanName($name){
    return filter_var($name, FILTER_SANITIZE_STRING);
  }
}

class FormVal{

  function validate($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo $email. " is a valid email";
    } else {
      echo $email. " is NOT a valid email";
    }
  }

}

$nIn = $_POST['name'];
$eIn = $_POST['email'];

$san = new FormSan();
$san->sanitize($nIn, $eIn);

$val = new FormVal();
$val->validate($san->getSanEmail($eIn));

/*if (isset($_POST['email'])){
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //sanitizes email
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo $email. " is a valid email";
  } else {
    echo $email. " is NOT a valid email";
  }
}*/

?>
