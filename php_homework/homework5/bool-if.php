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
echo "Array used for example: ";
print_r($someVars);

echo '<br>' . "-----" . '<br>';

foreach($someVars as $var){
	if(isset($var)){ //example 1
		echo "isset(" . $var . ") is true. " . $var . " is a set value.";
	} elseif (empty($var)){ //example 2
		echo "empty(" . $var . ") is true. " . $var . " is an empty value.";
	} elseif (is_null($var)){ //example 3
		echo "is_null(" . $var . ") is true. " . $var . " is null.";
	}
	echo '<br>';
	if(isset($var) && empty($var)){ //example 4
		echo $var . " is either 0 or false." . '<br>';
	}
	echo '<br>';
}
/*echo '<h2>' . "isset() example" . '</h2>' . '<br>';
foreach($someVars as $var){
	echo "$value <br> isset(" . $var . ") is: " .  isset($var) . "<br>";
}*/

/*echo '<br>' . "-----" . '<br>';

echo '<h2>' . 'empty() example' . '</h2>' . '<br>';
foreach($someVars as $var){
	echo "$value <br> empty(" . $var . ") is: " .  empty($var) . "<br>";
}

echo '<br>' . "-----" . '<br>';

echo '<h2>' . 'is_null() example' . '</h2>' . '<br>';
foreach($someVars as $var){
	echo "$value <br> is_null(" . $var . ") is: " .  is_null($var) . "<br>";
}

echo '<br>' . "-----" . '<br>';*/


?>
