<?php

class CsvWriter{

	public function __construct(){
	}

	public function writeCsv($arr, $file){
		try{
			$csv = fopen($file, 'w');
			echo 'File '. $file. ' successfully opened'. '<br>';
		}catch(Exception $e){
			echo 'Caught exception: '. $e->getMessage(). '<br';
			die('File read error');
		}

		foreach($arr as $fields){
			try{
				fputcsv($csv, $fields);
				echo 'Successfully wrote csv table to '. $file. '<br';
			} catch(Exception $f){
				echo 'Caught exception: '.$f->getMessage(). '<br';
				die("File write error");
			}
		}
		fclose($csv);
		echo $file. " is now closed and ready to be opened in Excel";
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
