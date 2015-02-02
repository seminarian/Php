<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Lijst van alle films</title>
</head>
<body>
	<h1>Lijst van alle films</h1>
	<ul>
	<?php
	foreach($filmLijst as $film) {
	?>
		<li><?php print($film->getTitel()); ?></li>
	<?php
	}
	?>
</body>
</html>




