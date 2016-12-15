<?php

/*
filter_var -> sanitizes and validates form data
sanitize -> remove illegal chars from data
validate -> determine if the data is in proper form; returns boolean

filter_var(variable you want to check, type of check to use);
can search for type of filters @ http://php.net/manual/en/filter.filters.php
*/


class FormSan{

  private $email;

  public function __construct($e){
    $this->email = $e;
  }

  function sanitize(){
    echo "Email before sanitizing: ". $email. "<br />";
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo "Email after sanitizing: ". $email. "<br />";
    echo "<br/><br/>";
  }

  function getSanEmail(){
    return filter_var($email, FILTER_SANITIZE_EMAIL);
  }
}

class FormVal{

  private $name;
  private $email;

  public function __construct($n, $e){
    $this->name = $n;
    $this->email = $e;
  }

  function validate(){
    if(filter_var($name, FILTER_VALIDATE_STRING)){
      echo $name. " is a valid name";
    } else {
      echo $name. " is NOT a valid name";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo $email. " is a valid email";
    } else {
      echo $email. " is NOT a valid email";
    }
  }

}

$san = new FormSan($_POST['email']);
$san->sanitize();

$val = new FormVal($_POST['name'], $san->getSanEmail());
$val->validate();

/*if (isset($_POST['email'])){
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //sanitizes email
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo $email. " is a valid email";
  } else {
    echo $email. " is NOT a valid email";
  }
}*/

?>
