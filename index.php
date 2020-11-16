<!DOCTYPE html>
<html>
<head>
	<title>XSS</title>
</head>
<body>
	<form action="index.php" method="GET">
		<input type="text" name="Zoekopdracht" placeholder="Zoekopdracht">
  		<input type="submit" value="Zoek"/>
</form>
</body>
</html>

	<?php
		if (isset($_GET["Zoekopdracht"])) {
			echo  $_GET["Zoekopdracht"] . "<br>";
			echo "Geen resultaat gevonden";
		}


// opdracht 1
// Ik krijg een pop-up dat zegt localhost says XSS voorbeeld. Daarna als je op ok drukt krijg je het echo's.

//opdracht 2
// Je krijgt Geen resultaat in blauw.

// opdracht 3
// Filter input on arrival
// Encode data on output
// Use appropriate response headers
// Content Security Policy
 ?>

