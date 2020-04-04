<!DOCTYPE html>
<html>
<head>
	<title>Building a Mad libs Game</title>
</head>
<body>
	<form action="BuildingMadLibsGame.php" method = "get">
		Color: <input type="text" name="color">
		Plural Noun: <input type="text" name="plural noun">
		Celebrity: <input type="text" name="celebrity">
		<input type="submit" name="">
		
	</form>
	<br>
	<?php 
	$color = $_GET["color"];
	$pluralnoun = $_GET["pluralnoun"];
	$celebrity = $_GET["celebrity"];
	
	echo "Roses are $color <br>";
	echo "$pluralnoun are blue <br>";
	echo "I love $celebrity <br>";
	 ?>


</body>
</html>