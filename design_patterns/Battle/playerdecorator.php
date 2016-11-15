<?php

  include ('player.php');

  //modifies player stats based on weapon
  class PlayerDecorator{
    protected $player;
    protected $magic;
    protected $atk;

    public function __construct(Player $p){
      $this->player = $p;
      $this->resetMagic();
      $this->resetAtk();
    }

    function resetMagic(){
      $this->magic = $this->player->getMagic();
    }
    function resetAtk(){
      $this->atk = $this->player->getAtk);
    }

    function showMagic(){ return $this->magic; }
    function showMagic(){ return $this->atk; }
  }

  //MagicSword adds magic modifier
  class MagicSword extends PlayerDecorator{
    private $pd;

    public function __construct(PlayerDecorator $pdIn){
      $this->pd = $pdIn;
    }

    function magicModifier(){
      $this->pd->magic = $magic + ($magic * 2);
    }
  }

  //GreatSword adds atk modifier
  class GreatSword extends PlayerDecorator{
    private $pd;

    public function __construct(PlayerDecorator $pdIn){
      $this->pd = $pdIn;
    }

    function atkModifier(){
      $this->pd->atk = $atk + ($atk * 2);
    }
  }

?>
