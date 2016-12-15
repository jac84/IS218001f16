<?php

/*
filter_var -> sanitizes and validates form data
sanitize -> remopve illegal chars from data
validate -> determine if the data is in proper form

filter_var(variable you want to check, type of check to use);
can search for type of filters @ http://php.net/manual/en/filter.filters.php
*/

//TODO: fix sanitize class after figuring out $_POST
/*class EmailSan{

  function sanitize(){
    if (isset($_POST['email'])){
      echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      echo "<br/><br/>";
    }
  }

  function getPost(){
    if(isset($_POST['submit'])) {
      echo("Name: " . $_POST['name'] . "<br />\n");
      echo("Email: " . $_POST['email'] . "<br />\n");
   }
  }

}

$san = new EmailSan;
$san->getPost();*/

if (isset($_POST['email'])){
  echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  echo "<br/><br/>";
}

?>
