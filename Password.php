<!-- This code is writen to distinguish get and post method -->

<!DOCTYPE html>
<html>
<head>
	<title>Getting User Input</title>
</head>
<body>
		<!-- <form action="Password.php" method="get"> --><!-- here 'get' method is not being a good scenerio because it show password in URL. as-> http://localhost:4000/Password.php?PASSWORD=Banana -->
		<!-- password: <input type="password" name="PASSWORD">
			<input type="submit">
			<br>
		</form>
	 	
	 	<?php 
	 		echo $_GET["PASSWORD"];
	 		
	 	?> 
	 	<hr>-->
	 	<form action="Password.php" method="post"><!-- here 'get' method is  being a good practice because it show does not show password in URL. -->
		password: <input type="password" name="PASSWORD">
			<input type="submit">
			<br>
		</form>
	 	
	 	<?php 
	 		echo $_POST["PASSWORD"];
	 		
	 	?>
</body>
</html>