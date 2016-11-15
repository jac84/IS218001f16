<?php
include 'player.php';
include 'enemy.php';
include 'singletonex.php';
include 'playerdecorator.php';
include 'enemyadapter.php';

//test everything
echo "Enter Player 1!" . '<br>';
player1 = new Player(20, 30, 10, 15); //created a new Player
print_r(player1 . '<br>');
echo "Enter Enemy!"
enemy1 = new Enemy(25, 10, 25, 20); //created a new Enemy
print_r(enemy1 . '<br>');

echo "Battle begin!";
battleInstance = BattleSingleton::getInstance(); //started a battle instance singleton
echo "Let's test to see if we can start another battle." . '<br>';
instance2 = BattleSingleton::getInstance(); //try to start another battle instance singleton

echo "Player 1! Equip your Great Sword!" . '<br>';
$decorator = new PlayerDecorator($player1);
print_r("Current attack: " . $decorator->showAtk() . <br>);
$greatSword = new GreatSword($decorator);
$greatSword->atkModifier();
print_r("Great Sword equipped! Current attack: " . $decorator->showAtk() . <br>);
echo "Player 1! Now equip your Magic Sword!" . '<br>';
$decorator->resetAtk();
print_r("Original magic: " . $decorator->showMagic() . <br>);
$magicSword = new MagicSword($decorator);
$magicSword->magicModifier();
print_r("Magic Sword equipped! Current magic: " . $decorator->showMagic() . <br>);

echo "Enemy! Let out a war cry!" . '<br>';
$enemyAdapt = new EnemyAdapter($enemy1);
$enemyAdapt->warCry();

?>
