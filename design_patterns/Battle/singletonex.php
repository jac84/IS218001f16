<?php

  class Singleton{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
      if(self::$instance == null){
        self::$instance = new Singleton();
        echo "new singleton instance created";
      } else {
        echo "singleton instance already instantiated";
      }

      return self::$instance;
    }
  }

  $object1 = Singleton::getInstance();
  $object2 = Singleton::getInstance();
  $object3 = Singleton::getInstance();

?>
