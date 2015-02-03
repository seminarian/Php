<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lijst van alle klanten</title>
</head>
<body>
	<h1>Lijst van alle klanten</h1>
	<ul>
	<?php
	foreach ($klantenLijst as $klant) {
	?>
	<li><?php print($klant->getVoornaam() . " " . $klant->getAchternaam() . " " . $klant->getTelefoonnummer()); ?> </li>
	<?php
	}
	?>
	</ul>
</body>
</html>




