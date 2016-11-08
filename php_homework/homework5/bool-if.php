<?php

/*class ifElseEx{
	protected $var;

	public function __construct($v){
		$this->rows = $a;
	}

	public function ifElseIsset($input){
		$varIsset = isset(
	}
}*/

$someVars = array(0, "0", "", "string", FALSE, TRUE, NULL);

foreach($someVars as $var){
	echo "$value <br> isset(" . $var . ") is: " .  isset($var) . "<br>";
}
?>
