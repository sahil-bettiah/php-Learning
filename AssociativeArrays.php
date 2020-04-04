<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays</title>
</head>
<body>
	<form action ="AssociativeArrays.php" method="post">

		<input type="get" name="student">
		<input type="submit" name="">
		
	</form>

	<!-- <?php 
		//$grades = array("Jim" => "A+", "Jim" =>"D","Pam" =>"B-", "Oscar" =>"C+"); // In this case, we have two key with same name, so, there is confusion which element we want to access. By this example, key will contain the data of later key.


		$grades = array("Jim" => "A+", "Pam" =>"B-", "Oscar" =>"C+");
		echo $grades["Jim"];
		$grades["Jim"] = "F";
		echo "<br>";
		echo $grades["Jim"];


	 ?> -->
	 <?php  
	 	$grades = array("Jim" => "A+", "Pam" =>"B-", "Oscar" =>"C+");
	 	echo $grades[$_POST["student"]]
	 ?>


</body>
</html>