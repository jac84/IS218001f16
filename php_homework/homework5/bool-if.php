<?php

$someVars = array(0, "0", "", "string", FALSE, TRUE, NULL);
echo "Array used for example: ";
print_r($someVars);

echo '<br>' . "-----" . '<br>';

echo '<h2>' . "If/Else Examples" . '</h2>';
echo '<br>';

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

echo '<br>' . "-----" . '<br>';

echo '<h2>' . "Switch Case Examples" . '</h2>';
echo '<br>';

foreach($someVars as $var){
	switch(isset($var)){
		case TRUE:
			echo $var . " is a set variable" . '<br>';
			break;
		case FALSE:
			echo $var . " is not set variable" . '<br>';
			break;
	}
}
echo '<br>' . "---" . '<br>';
foreach($someVars as $var){
	switch(empty($var)){
		case TRUE:
			echo $var . " is an empty variable" . '<br>';
			break;
		case FALSE:
			echo $var . " has a value" . '<br>';
			break;
	}
}
echo '<br>' . "---" . '<br>';
foreach($someVars as $var){
	switch(is_null($var)){
		case TRUE:
			echo $var . " is null" . '<br>';
			break;
		case FALSE:
			echo $var . " is not null" . '<br>';
			break;
	}
}
echo '<br>' . "---" . '<br>';
foreach($someVars as $var){
	switch(isset($var) && empty($var)){
		case TRUE:
			echo $var . " is a set variable but empty" . '<br>';
			break;
		case FALSE:
			echo $var . " is not a set variable" . '<br>';
			break;
	}
}

?>
