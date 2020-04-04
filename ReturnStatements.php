<!DOCTYPE html>
<html>
<head>
	<title>Return Statements</title>
</head>
<body>


	<?php 
		function cube($a){
			return $a*$a*$a;
		}
		$cubeResult = cube(4);
		echo "The cube of number is: $cubeResult";
		echo "<br>";
		echo cube(5);

	 ?>


</body>
</html>