<!DOCTYPE html>
<html>
<head>
	<title>Inheritance</title>
</head>
<body>


	<?php 
		class Chef{
			function makeChicken(){
				echo "The Chef makes chicken <br>";
			}
			function makeSalad(){
				echo "The Chef makes salad <br>";
			}
			function makeSpecialDish(){
				echo "The Chef makes bbq ribs <br>";
			}
		}
		
		class ItalianChef extends Chef{
			function makePasta(){
				echo "The italian chef makes pasta<br>";
			}
			function makeSpecialDish(){
				echo "The Chef makes chicken parm <br>";
			}
		}

		$chef = new Chef();
		$chef->makeChicken();
		$chef->makeSpecialDish();
		echo"<br>";

		$italianChef = new ItalianChef();
		$italianChef->makePasta();
		$italianChef->makeSpecialDish();


	 ?>


</body>
</html>