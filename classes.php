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
}

// object, instance of the class
$book=new Book;
$book->title="dee learn";
$book->author="dee";
$book->title=50;

echo $book->title;

 ?>
</body>
</html>