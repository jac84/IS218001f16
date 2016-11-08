<?php
include_once('book.php');
//singleton ensures a class can only distribute only one instance of itself to other classes
class BookSingleton extends Book{ //creates a singleton out of existing book obj class
	private static $book = NULL;
	private static $isLoanedOut = FALSE;
	
	private function __construct($author, $title){ //constructs a new book obj singleton
		$book = new Book($author, $title);
	}

	static function borrowedBook(){
		if(FALSE == self::$isLoanedOut){ //if book is not loaned out
			if(NULL == self::$book){
				self::$book = new BookSingleton(); 
				//creates singleton if no set book obj
			}
			self::$isLoanedOut = TRUE; //borrows book
			return self::$book; //returns the book obj in singleton borrowed
		} else {
			return NULL; //book is already borrowed
		}
	}

	function returnBook(BookSingleton $bookReturned){
		self::$isLoanedOut = FALSE;
	}

}

?>
