<?php

class BookMissingDecorator extends BookDecorator{ //adds stars book titles if they are missing

protected $bd;

public function __construct(BookDecorator $bd_in){
  $this->bd = $bd_in;
}

function bookMissing(){
  $this->bd->title = "*" . this->bd->title . "*"; //stars title
}

}

?>
