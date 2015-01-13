<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening3.3</title>
</head>
<body>
	<form action="oefening3.5.php" method="get">
		<label>Uw gok:</label><input type="text" name="gok">
		<input type="submit" value="OK">
	</form>
	<h1>
		
	<?php
	$gekozen=rand(1,10);
	$gok=$_GET["gok"];
	print("Gok van de bezoeker is " . $gok);
	print(". Het juiste getal was " . $gekozen);

	if($gok==$gekozen) print(". U heeft juist gegokt");
	else print("Foutief gegokt. Kies opnieuw aub.");

	?>




	</h1>
</body>
</html>




