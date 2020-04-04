<!DOCTYPE html>
<html>
<head>
	<title>for Statements</title>
</head>
<body>


	<?php 
		$luckeyNumbers = array(4, 8, 14, 16, 23, 42);
		for($i = 1; $i<=5; $i++){
			echo "$i <br>";
		}
		echo "<br>";
		for($i = 0; $i<count($luckeyNumbers); $i++){
			echo "$luckeyNumbers[$i] <br>";
		}

	 ?>


</body>
</html>