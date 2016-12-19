<?php
/*
CONTROLLER
  - handles user input data
  - submits and updates model accordingly
  - only connected to ONE VIEW and ONE MODEL
  - each CONTROLLER function is a trigger
  - does NOT process any data, just passes it off
*/

class Controller{
    private $model;

    public function __construct($m) {
        $this->model = $m;
    }
}

?>
