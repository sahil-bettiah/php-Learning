<!DOCTYPE html>
<html>
<head>
	<title>if Statements part2</title>
</head>
<body>


	<?php 
		
		function getMax($num1, $num2){
			if($num1 > $num2){
				return $num1;
			}else{
				return $num2;
			}
		}
		function getmaxfrom3($num1, $num2, $num3){
			if($num1 > $num2 && $num1 > $num3){
				return $num1;
			}
			elseif($num2>$num1 && $num>$num3){
				return $num2;
			}
			else{
				return $num3;
			}
		}
		echo getMax(15, 9);
		echo "<br>";
		echo getmaxfrom3(5, 2, 29);

	 ?>


</body>
</html>