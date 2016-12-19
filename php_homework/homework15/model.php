<?php
/*
MODEL
  - permanent storage of the data used in overall design
  - allows access for the data to be viewed, or collected and written to
  - bridges View and Controller
  - has no connection of whats happening to the data when passed to view/controller
  - only purpose is to process data into permanent storage or seek and prepare
    data tp be passed to other parts
  - acts as gatekeeper to data
  - often most complex part of MVC
*/

class Model{
    public $string;

    public function __construct(){
        $this->string = "I guess this is MVC";
    }
}

?>
