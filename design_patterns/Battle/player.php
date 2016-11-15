<?php

  public class Player{
    protected $level;
    protected $health;
    protected $magic;
    protected $atkDmg;


    function __construct($lvl, $hp, $mp, $atk){
      $this->level = $lvl;
      $this->health = $hp;
      $this->magic = $mp;
      $this->atkDmg = $atk;
    }

    public function getLevel(){return $this->level;}
    public function getHealth(){return $this->health;}
    public function getMagic(){return $this->magic;}
    public function getAtk(){return $atkDmg;}
  }

?>
