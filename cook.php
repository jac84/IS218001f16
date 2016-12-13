<?php

abstract class makeFood{ //abstract factory
  abstract function cook($i);
}

class makeBreakfast extends makeFood{
  private $context = "breakfast";
  function cook($i){
    $food = NULL;
    switch($i){
      case "eggs":
        $food = "eggs";
      break;
      case "pancakes":
      default:
    }
  }
}

?>
