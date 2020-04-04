<!DOCTYPE html>
<html>
<head>
	<title>Building Better Calculator</title>
</head>
<body>
	<form action="BuildingBetterCalculator.php" method="post">
		First Num: <input type="number" step="0.1" name="num1"><br><br>
		OP: <input type="text" name="op"><br><br>
		Second Num: <input type="number"  step = "0.1" name="num2"><br><br>
		
		<input type="submit" name="">
	</form>

	<?php 
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$op = $_POST["op"];

		if($op== "+"){
			echo $num1+$num2;
		}elseif ($op == "-") {
			# code..
			echo $num1 - $num2;
		}
		elseif ($op == "*") {
			# code...
			echo $num1*$num2;
		}elseif ($op == "/") {
			# code...
			echo $num1/$num2;
		}
		else{
			echo "error";
		}

		

	 ?>


</body>
</html>