<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lijst van alle uitleningen</title>
</head>
<body>
	<h1>Lijst van alle uitleningen</h1>
	<ul>
	<?php
	foreach ($uitleningenLijst as $uitlening) {
	?>
	<li><?php print($uitlening->getId() . " " . $uitlening->getKlantId() . " " . $uitlening->getDatumUitlening()); ?> </li>
	<?php
	}
	?>
	</ul>
</body>
</html>




