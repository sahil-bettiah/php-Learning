<!DOCTYPE html>
<html>
<head>
	<title>switch  Statements</title>
</head>
<body>
	<form action="switchStatements.php" method="post">
		What was your grades?
		<br>
		<input type="text" name="grade">
		<input type="submit" name="">
		

	</form>

	<?php 
		$grade = $_POST["grade"];
		switch($grade){
			case "A":
				echo "Your grade is 'A' and you did amazing.";
				break;
			case "B":
				echo "Your grade is 'B' and you did pretty good.";
				break;
			case "C":
				echo "Your grade is 'C' and you did good.";
				break;
			case "D":
				echo "Your grade is 'D' and you did poorly.";
				break;
			case "E":
				echo "Your grade is 'E' and you did very poorly.";
				break;
			case "F":
				echo "You fail.";
				break;
			default:
				echo "Invalid Grade";
		}
		

	 ?>


</body>
</html>