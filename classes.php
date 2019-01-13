<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Classes</title>
	</head>
	<body>
		
		<h1 class="red-text">Classes</h1>
		<?php
		// class
		class Book{
			var $title;
			var $pages;
			var $author;
		// constructors
		// gets called when an object of a class is created
		function __construct($aAuthor,$aTitle,$aPages){
			$this->title=$aTitle;
			$this->author=$aAuthor;
			$this->pages=$aPages;
			// echo "constructor called book created <br>";
		}
		}
		// object, instance of the class
		$book1=new Book('dee','dee learn',400);
		// $book1->title="dee learn";
		// $book1->author="dee";
		// $book1->title=50;
		$book=new Book('dee2','dee learn 2',500);
		// $book->title="dee2 learn";
		// $book->author="dee2";
		// $book->title=502;
		echo $book->title;
		?>
	</body>
</html>