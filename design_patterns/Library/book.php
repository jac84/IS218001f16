<?php

class Book{
  private $author;
  private $title;
  private $checkedIn;
  function __construct($title_in, $author_in) { //construct book class
    $this->author = $author_in;
    $this->title  = $title_in;
    $this->checkedIn = true;
  }
  function getAuthor() { return $this->author; }
  function getTitle() { return $this->title; }

  function getAuthorAndTitle() { return $this->getTitle().' by '.$this->getAuthor(); }

  function checked(){
    if(!$checkedIn){
      //set checkedIn to false and italicize title
    } else {
      //
    }
  }
}

?>
