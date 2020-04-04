<!DOCTYPE html>
<html>
<head>
	<title>objectsFunctions-PHP-Tutorial31</title>
</head>
<body>


	<?php 
		class Students{
			var $name;
			var $major;
			var $gpa;

			function __construct($name, $major, $gpa){
				$this->name = $name;
				$this->major = $major;
				$this->gpa = $gpa;
			}

			function hasHonors(){
				if($this->gpa <= 2.5){
					return 1;
				}else{
					return 0;
				}
			}
		}

		$Students1 = new Students("Sahil", "Bussiness", 2.9);
		$Students2 = new Students("Jatin", "Art", 2.4);

		echo $Students1->hasHonors();
		echo "<br>";
		echo $Students2->hasHonors();
		

	 ?> 


</body>
</html>