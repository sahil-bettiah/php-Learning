<!DOCTYPE html>
<html>
<head>
	<title>Using Checkboxes</title>
</head>
<body>
	<form action="UsingCheckboxes.php" method = "post">
		 Apple: <input type="checkbox" name="fruits[]" value="apples"><br>
		 Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
		 Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

		<input type="submit" name="">
		
	</form>
	<?php 
		$fruits = $_POST["fruits"];
		echo $fruits[0];
		echo" $fruits[1]";
		echo" $fruits[2]";
		

	 ?>


</body>
</html>