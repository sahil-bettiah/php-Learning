<!DOCTYPE html>
<html>
<head>
	<title>Working with Numbers</title>
</head>
<body>
	<?php 
		echo "40 <br>";
		echo "40.5 <br>";
		echo "-56.39 <br>";
		echo 5+9;
		echo ", ";
		echo 5 % 2;
		echo "<br>";
		echo  4+6/5;
		echo "<br>";
		echo  (4+6)*5;
		echo "<br>";
		$num = 10;
		$num++;// num = num + 1=11
		$num += 25;//num = num + 25= 11+25=36
		echo $num;
		echo "<br>";
		//echo abs(-100);
		echo 678^4;// This will not give power value but it will give difference of two value.
		echo "<br>";
		echo pow(2, 4);
		echo "<br>";
		echo sqrt(144);
		echo "<br>";
		echo max(1, 3);
		echo "<br>";
		echo min(1, 3);
		echo "<br>";
		echo round (3.54);
		echo "<br>";
		echo ceil(8.3);
		echo "<br>";
		echo floor(5.9);
		echo "<br>";
		echo log(10);
		echo "<br>";
		echo log10(10);
		echo "<br>";
		echo log1p(10);
		
	 ?>
</body>
</html>