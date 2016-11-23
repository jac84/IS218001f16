<?php

include "bookfactory.php";
//load books into a library

$books = array();
//in hindsight this would be better done with a csv but im getting this done
$titles = array("A Book", "Another Book", "Some Third Book", "Examples");
$authors = array("John Q", "Sam A", "Suzy Q", "Some Person");

for ($i = 0; $i < count($titles); $i++){
  $books[$i] = BookFactory::create($titles[$i], $authors[$i]);
}

foreach($books as $b){
  print_r($b->getTitle() . " by " . $b->getAuthor() . " " . $b->checkStatus() . '<br>');
}

?>
