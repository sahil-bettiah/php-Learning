<!DOCTYPE html>
<html>
<head>
	<title>Getting User Input</title>
</head>
<body>
		Your name and age is<br> 
		<form action="GettingUserInput.php" method="get">
			Name: <input type="text" name="NAME">
			Age: <input type = "number" name = "AGE">
			<input type="submit">
			<br>
		</form>
	 	
	 	<?php 
	 		echo $_GET["NAME"];
	 		echo "<br>";
	 		echo $_GET["AGE"];
	 	?>
</body>
</html>