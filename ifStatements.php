<!DOCTYPE html>
<html>
<head>
	<title>if  Statements</title>
</head>
<body>


	<?php 
		$isMale = false;
		$isTall = true;
		if($isMale && $isTall){
				echo "you are a tall male.";
		}
		elseif($isMale && !$isTall){
			echo "you are short male.";

		}elseif(!$isMale && $isTall){
			echo "you are not male but are tall.";
		}
		else{
			echo "you are not male";
		}
		
		echo "<br><br>Following code for 'OR' statements<br><br>";
		$ISmale = false;
		$IStall = true;
		if($isMale || $isTall){
				echo "you are a tall male.";
		}
		else{
			echo "you are not male";
		}
		

	 ?>


</body>
</html>