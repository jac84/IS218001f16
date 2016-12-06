<?php

include "book.php";

class BookFactory{ //to populate library inventory array
  public static function create($title, $author){
    return new Book($title, $author);
  }
}

?>
