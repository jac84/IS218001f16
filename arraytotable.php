<?php
	$anArray = array(
		array('A1', 'A2', 'A3'),
		array('B1', 'B2', 'B3'),
		array('C1', 'C2', 'C3')
	);

	print_r($anArray);
	echo '<br>';

	class htmlTable{
		protected $rows;

		public function __construct($a){
			$this->rows = $a;
		}


		public function arrayToTable(){
			print_r('<table>');
			foreach($this->rows as $row){
				print_r('<tr>');
				foreach ($row as $column){
					print_r('<td>' .$column .'</td>');
				}
				print_r('</tr>');
			}
			print_r('</table>');
		}
	}

	$newTable = new htmlTable($anArray);
	$newTable -> arrayToTable();

	//csv assignment

	function readCSV($csvFile){
		$openFile = fopen($csvFile, 'r');
		while(!feof($openFile)){
			$csvRow[] = fgetcsv($openFile, 1024);
		}
		fclose($openFile);
		return $csvRow;
	}

	$csvFile = 'example.csv'; //set to name of csv file

	$csv = readCSV($csvFile);

	print_r($csv);

	echo '<br><br>';

	$csvTable = new htmlTable($csv);
	$csvTable -> arrayToTable();
?>
