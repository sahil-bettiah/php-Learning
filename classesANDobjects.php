<!DOCTYPE html>
<html>
<head>
	<title>classes and objects</title>
</head>
<body>


	<?php 
		class Book{
			var $title;
			var $author;
			var $pages;
		}

		$Book1 = new Book;
		$Book1->title = "Harry Potter";
		$Book1->author = "JK Rowling";
		$Book1->pages = 400;

		$Book2 = new Book;
		$Book2->title = "Lord of the Rings";
		$Book2->author = "Tolkien";
		$Book2->pages = 700;
		echo "The details of Book1 is as below:<br>";
		echo $Book1->author;
			echo "<br>";		
		echo $Book1->pages;
			echo "<br>";
		echo $Book1->title;
			echo "<br>";
			echo "<br>";
		echo "The details of Book2 is as below:<br>";
		echo $Book2->author;
			echo "<br>";
		echo $Book2->pages;
			echo "<br>";
		echo $Book2->title;
		


		
	 ?>


</body>
</html>