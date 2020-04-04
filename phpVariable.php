<!DOCTYPE html>
<html>
<head>
	<title>php Variable</title>
</head>
<body>
	<?php
		echo "<h1>php variable</h1>";
		echo"There once was a man named George <br>";
		echo"He was 70 years old <br>";
		echo"He really liked the name George<br>";
		echo"But he didn't like being 70";
		echo"<hr>";
	?>
	
	<?php
	$characterName = "John";
	$characterAge = 35;
		
		echo"There once was a man named $characterName <br>";
		echo"He was $characterAge years old <br>";
		echo"He really liked the name $characterName<br>";
		echo"But he didn't like being $characterAge";
		echo"<hr>";
	?>
	<?php
		$characterName = "John";
		$characterAge = 35;
		
		echo"There once was a man named $characterName <br>";
		echo"He was $characterAge years old <br>";
		$characterName = "Sahil";
		$characterAge = 20;
		echo"He really liked the name $characterName<br>";
		echo"But he didn't like being $characterAge";
	?>

</body>
</html>