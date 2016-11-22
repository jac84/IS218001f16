<?php

class BookDecorator{ //base class of book decorators
  protected $book;
  protected $title;

  public function __construct(Book $b){
    $this->book = $b;
    $this->resetTitle();
  }

  function resetTitle() { $this->title = $this->book->getTitle(); }
  function showTitle() { return $this->title; }

}

?>
