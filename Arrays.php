<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

	<?php 
		$friends = array("Jatin", "Praveen", "Prajjwal", "Aman", 1, 1.1);
		echo $friends;
		echo "<br>";
		echo $friends[0];
		echo "<br>";
		echo $friends[4];
		echo "<br>";
		echo $friends[5];
		echo "<br>";
		echo $friends[3];
		$friends[3] = "Nautanki";
		echo " ";
		echo $friends[3];
		$friends[6] = "sahil";
		echo "<br>";
		echo $friends[6];
		echo "<br>Total numbers of elements in that arrat is: ";
		echo count($friends);
	 ?>

</body>
</html>