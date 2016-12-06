<?php

include_once('book.php');

class BookTitleDecorator{
	protected $book;
	protected $title;

	public function __contruct(Book $b){
		$this->book = $b;
		$this->resetTitle();
	}

	//resets title of book
	function resetTitle(){
		$this->title = $this->book->getTitle();
	}

	function showTitle(){
		return $this->title;
	}
}

?>
