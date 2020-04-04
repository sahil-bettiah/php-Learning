<!DOCTYPE html>
<html>
<head>
	<title>URL parameter</title>
</head>
<body>
	<form action="URLparameter.php" method="get">
		Name: <input type="text" name="NAME">
		<input type="submit" name="">
		

	</form>
	<br>
	<?php 
		echo $_GET["NAME"];
		echo $_GET["age"];
	 ?>


</body>
</html>