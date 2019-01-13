<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
</head>
<body>


	<?php 
	// set variables from  another file
	$title='blog-post';
	$author='dee';
	$wordcount=4;
	include 'article-header.php'; 

	include 'useful-tools.php';

	print sayHi("dee");

	print $feetInMiles;




	?>
	
</body>
</html>