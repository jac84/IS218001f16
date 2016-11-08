<?php

include_once('book.php')

//adapter pattern for book.php
class BookAdapter{
	private $book;

	function __construct(Book $b){
		$this->book = $b;
	{

	function getAuthorAndTitle(){
		return $this->getTitle().'by'.$this->getAuthor();//adds this function to the base Book obj
	}
}

?>
