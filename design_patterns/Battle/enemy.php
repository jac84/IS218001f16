<?php

  public class Enemy{
    protected $health;
    protected $magic;
    protected $atkDmg;



    function __construct($hp, $mp, $atk){
      $this->health = $hp;
      $this->magic = $mp;
      $this->atkDmg = $atk;
    }

    public function getHealth(){return $this->health;}
    public function getMagic(){return $this->magic;}
    public function getAtk(){return $atkDmg;}
  }

?>
