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


		// OBJECT FUNCTIONS

		class Student{
			var $name;
			var $major;
			var $gpa;

			function __construct($aName,$aMajor,$aGpa){

				$this->$name=$aName;
				$this->$major=$aMajor;
				$this->$gpa=$aGpa;
			}

			function hasHonors(){
				if ($this->gpa < 1) {

					return "true";
				}
				else{
					return "flase";
				}

			}
		}

		$student1=new Student('dee','bis',5);
		$student2= new Student('deo','bit',3);

		print $student1->hasHonors(); 

		// Setters Getters
		class Movie{
			// protect access to attributes
			public $title;
			private $rating;

			function __construct($title,$rating){
				$this->title=$title;
				$this->rating=$rating;


			}

			// getter for private class
			function getRating(){
				return $this->rating;
			}
			// setter for private class
			function setRating($rating){
				if ($rating=="OR" || $rating=="PG") {
					return $this->rating=$rating;
				}
				else{
					print "invalid rating <br>";
				}
				
			}
		}

		$avengers=new Movie("Avengers","PG-13");

		print $avengers ->title;

		print $avengers->getRating();
		print $avengers->setRating('sss');

		// inheritance  classes

		class Chef{
			function makesChicken(){
				print "makes chicken";
			}

			function makesRibs(){
				print 'makes Ribs';
			}

			function makesFish(){
				print 'makes Fish';
			}
		}

		$chef1=new Chef;

		$chef1->makesFish();

		class ItalainChef extends Chef{
			function makesPizza(){
				print 'makes pasta';
			}

		}

		$italianchef=new ItalainChef;
		$italianchef->makesPizza();

	
		?>
	</body>
</html>