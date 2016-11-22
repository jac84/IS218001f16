<?php

class BookOutDecorator extends BookDecorator{ //italicizes book titles if they are checked out
  protected $bd;

  public function __construct(BookDecorator $bd_in){
    $this->bd = $bd_in;
  }

  function bookOut(){
    $this->bd->title = '<i>' . this->bd->title . '</i>'; //bolds title
  }

}

?>
