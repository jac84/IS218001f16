<?php
	$rows = array(
		array('A1', 'A2', 'A3'),
		array('B1', 'B2', 'B3'),
		array('C1', 'C2', 'C3')
	);

	print_r($rows);

	echo '<table>';
	foreach($rows as $row){
		echo '<tr>';
		foreach ($row as $column){
			echo '<td>' .$column .'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
?>
