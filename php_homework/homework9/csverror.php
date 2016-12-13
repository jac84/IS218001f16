<?php

class CsvWriter{

	public function __construct(){
	}

	public function writeCsv($arr, $file){
		try{
			$csv = fopen($file, 'w');
		}catch(Exception $e){
			echo 'Caught exception: '. $e->getMessage(). "\n";
			die('File read error');
		}

		foreach($arr as $fields){
			try{
				fputcsv($csv, $fields);
			} catch(Exception $f){
				echo 'Caught exception: '.$f->getMessage(). "\n";
				die("File write error");
			}
		}
		fclose($csv);
	}

}

$list = array(
	array('Head 1', 'Head 2', 'Head 3'),
	array('123', '456', '789'),
	array('abc', 'def', 'ghi')
);

$writer = new CsvWriter();
$writer->writeCsv($list, 'newcsv.csv');

?>
