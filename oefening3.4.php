<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 3.1</title>
</head>
<body>


<form action="oefening3.4.php" method="get">
	Getal 1: <input type="text" name="getal1">
	getal 2: <input type="text" name="getal2">
	<input type="submit" value="OK">
</form>

	<h1>
		<?php
		$getal1=$_GET["getal1"];
		$getal2=$_GET["getal2"];
		$som=$getal1+$getal2;
		print("De som van de twee getallen is " . $som);





		?>


	</h1>
</body>
</html>




