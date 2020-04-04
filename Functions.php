<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>


	<?php 
		function sayHi(){
			echo " Welcome in phpFunctions!";

		}
		function SaySomething($name, $age){
			echo "Hello $name, your age is $age and";
		}
		SaySomething("Sahil", 20);
		sayHi();
		echo "<br>";
		SaySomething("Jatin", 19);
		sayHi();
		echo "<br>";
		SaySomething("Prajjwal", 20);
		sayHi();
		echo "<br>";
		SaySomething("Praveen", 39);
		sayHi();
	 ?>
</body>
</html>