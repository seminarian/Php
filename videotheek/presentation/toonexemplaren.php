<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lijst van alle exemplaren</title>
</head>
<body>
	<h1>Lijst van alle exemplaren</h1>
	<ul>
	<?php
	foreach ($exemplarenLijst as $exemplaar) {
	?>
	<li><?php print($exemplaar->getId() . " " . $exemplaar->getFilmID() . " " . $exemplaar->getUitgeleend()); ?> </li>
	<?php
	}
	?>
	</ul>
</body>
</html>