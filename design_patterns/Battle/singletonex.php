<?php

  class BattleSingleton{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
      if(self::$instance == null){
        self::$instance = new BattleSingleton();
        echo "Battle initiated!" . '<br>';
      } else {
        echo "There's already a battle happening!";
      }

      return self::$instance;
    }
  }

  $object1 = BattleSingleton::getInstance();
  $object2 = BattleSingleton::getInstance();

?>
