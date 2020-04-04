<!DOCTYPE html>
<html>
<head>
	<title>constructor</title>
</head>
</head>
<body>


	<?php 
		class Book{
			var $title;
			var $author;
			var $pages;
			// // First example of constructor.
			// function __construct($name){
			// 	echo "$name created a";
			// 	echo "New Book is Created.<br>";

			// }

			// Second example of constructor.
			function __construct($aTitle, $aAuthor, $aPages){
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->pages = $aPages;
			}
		}

		$Book1 = new Book("Harry Potter", "JK Rowling", 400);
		
		$Book2 = new Book("Lord of Rings", "Tolkien", 700);
		
		
		echo $Book1->title;
		echo "<br>";
		$Book1->title = "Hunger Games";

		echo $Book1->title;


		
	 ?>


</body>
</html>