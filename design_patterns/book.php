<?php

//Book base object
class Book{
	private $author;
	private $title;

	function __construct($t, $a){
		$this->author = $a;
		$this->title = $t;
	}

	function getAuthor(){return $this->author;}
	function getTitle(){return $this->title;}

	function getAuthorAndTitle(){
		return $this->getTitle().'by'.$this->getAuthor();
	}
}

?>
