<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lijst van alle gebruikers</title>
</head>
<body>
	<h1>Lijst van alle gebruikers</h1>
	<ul>
	<?php
	foreach ($gebruikersLijst as $gebruiker) {
	?>
	<li><?php print($gebruiker->getGebruikersnaam() . " " . $gebruiker->getWachtwoord()); ?> </li>
	<?php
	}
	?>
	</ul>
</body>
</html>


