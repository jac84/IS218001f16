<?php
/*
VIEW
  - where data requested from MODEL is viewed & final output is determined
  - usually HTML
  - ignites reactions with users which interacts with CONTROLLER (ie: button)
  - NOT a template file
  - NO DIRECT RELATIONSHIP B/T VIEW & CONTROLLER W/O MODEL
*/

class View{
    private $model;
    private $controller;

    public function __construct($c,$m) {
        $this->controller = $c;
        $this->model = $m;
    }

    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}

?>
