<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening3.3</title>
</head>
<body>
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




