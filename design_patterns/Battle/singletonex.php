<?php

  class BattleSingleton{ //creates battle instance
    private static $instance = null; //creates a blank instance
    private static $_isInitiated = FALSE;

    private function __construct(){} //doesnt need input constructors

    public static function getInstance(){
      //if battle instance isnt running, start an instance
      if(self::$_isInitiated == FALSE){
        self::$instance = new BattleSingleton();
        self::$_isInitiated = TRUE;
        echo "Battle initiated!" . '<br>';
      } else {
        //instance is already running
        echo "There's already a battle happening!" . '<br>';
      }
      return self::$instance;
    }

    //returns if instance is initiated or not (boolean)
    public function isInitiated(){ return self::$_isInitiated; }

  }

  //tested if battlesingleton works
  /*if(!$_isInitiated){
    echo "False" . '<br>';
  } else {
    echo "True" . '<br>';
  }
  $object1 = BattleSingleton::getInstance();
  $object2 = BattleSingleton::getInstance();

  //it finally works
  if($object1->isInitiated() == FALSE){
    echo "False" . '<br>';
  } else {
    echo "True" . '<br>';
  }*/
?>
