<!DOCTYPE html>
<html>
<head>
	<title>Getters & Setters</title>
</head>
<body>
	<p>Consider on First block of Code:<br></p>
	<?php 
		class movie{
			public $title;
			public $rating;

			function __construct ($title, $rating){
				$this->title = $title;
				$this->rating = $rating;
			}
			
		}

		$avengers = new movie("Avengers", "PG-13");

		
		echo $avengers->rating;
		echo "<br>";
		$avengers->rating = "Dog";
		echo $avengers->rating;
		echo "<br>";
		echo $avengers->title;

		
 	?>


<hr>
<p>Consider on Second block of Code:<br></p>
	<?php 
		class newMovie{
			public $title;
			private $rating;

			function __construct ($title, $rating){
				$this->title = $title;
				$this->rating = $rating;
			}
			function getRating(){
				return $this->rating;
			}
			function setRating($rating){
				if($rating == "PG" || $rating == "PG-13" ||$rating == "R" ||$rating == "NR"){
					$this->rating = $rating;
				}
				else{
					$this->rating = "NR";
				}
			}			

		}
		//rating should be: G, PG, PG-13, R, NR
		$avengers = new newMovie("Avengers", "dog");//how do we filter out this invalid rating. As 'dog' should not be printing as rating because it is invalid rating.


		echo $avengers->getRating();
		echo "<br>";
		$avengers->setRating("Dog");
		echo $avengers->getRating();

		echo "<br>";
		echo $avengers->title;
 	?>


</body>
</html>