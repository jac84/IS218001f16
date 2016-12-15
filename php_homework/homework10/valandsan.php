<?php

/*
filter_var -> sanitizes and validates form data
sanitize -> remopve illegal chars from data
validate -> determine if the data is in proper form

filter_var(variable you want to check, type of check to use);
can search for type of filters @ http://php.net/manual/en/filter.filters.php
*/


class EmailSan{

  function sanitize(){
    if (isset($_POST['email'])){
      echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      echo "<br/><br/>";
    }
  }

  /*function getPost(){
    if(isset($_POST['email']) && isset($_POST['name'])) {
      echo $_POST['name']; //("Name: " . $_POST['name'] . "<br />\n");
      echo $_POST['email'];//("Email: " . $_POST['email'] . "<br />\n");
   }
 }*/

}

$san = new EmailSan;
$san->sanitize();

/*if (isset($_POST['email'])){
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //sanitizes email
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo $email. " is a valid email";
  } else {
    echo $email. " is NOT a valid email";
  }
}*/

?>
