<?php

  require('enemy.php')

  //in strategy, if player is over lvl10 the enemy screams
  class EnemyAdapter{
    private $enemy;

    function __construct(Enemy $e){
      $this->enemy = $e;
    }

    function warCry(){
      print_r("Roar!");
    }
  }

  //$enemy1 = new Enemy(20, 40, 20, 30);
  //print_r($enemy1);
  //$ea1 = new EnemyAdapter($enemy1);
  //$ea1 ->warCry();

?>
