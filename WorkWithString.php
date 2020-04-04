<!DOCTYPE html>
<html>
<head>
	<title>Work with String</title>
</head>
<body>
	<?php 
		$phrase = "Sahil kumar";

		echo "Giraffe Academy<br>";
		echo strtolower($phrase);
		echo  "<br>";
		echo strtoupper($phrase);
		echo  "<br>";
		echo strtoupper("sahilKUMAR");
		echo  "<br>";
		echo strlen($phrase);
		echo "<br> $phrase[1], $phrase[0], $phrase[5], $phrase[6]";
		echo  "<br>";
		echo "sahilKUMAR"[0];
		echo  "<br>";
		$phrase [0] = "C";
		echo $phrase;
		echo  "<br>";
		echo str_replace("kumar", "gupta", $phrase);
		echo  "<br>";
		echo $phrase;
		echo "<br>";
		echo substr($phrase, 6, 3);
	 ?>

</body>
</html>