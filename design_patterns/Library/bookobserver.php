<?php

class BookObserver extends AbstractObserver{ //to be used by library variable

  protected $checkedOut;

  public function __construct(){
    $checkedOut = array();
  }

  public function addBooks(){
    
  }

  public function update(Book $b){

  }
}


?>
