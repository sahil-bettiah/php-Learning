<!DOCTYPE html>
<html>
<head>
	<title>include: PHP</title>
</head>
<body>


	<?php 
	$title = "My first post.";
	$author = "Sahil";
	$wordCount = 400;
	include "article-header.php"
	?>
	<br>
	<?php 

		include "useful-tools.php" ;
		echo $feetInMile;
		echo "<br>";
		sayHi("Sahil");

	?>

</body>
</html>