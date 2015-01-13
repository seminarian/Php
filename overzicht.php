<?php
require_once("module.class.php");
require_once("moduleLijst.class.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modules</title>
</head>
<body>
	<h1>Modules</h1>
	<?php
	$modLijst = new ModuleLijst();
	$tab = $modLijst->getLijst();
	?>
	<ul>
		<?php
		foreach ($tab as $module) {
			$moduleNaam = $module->getNaam();
			$moduleId = $module->getId();
			$modulePrijs = $module->getPrijs();
			print("<li>" . $moduleNaam . " (Prijs: " . $modulePrijs . "euro) (<a href=\"modulebewerken.php?id=".$moduleId . "\">Bewerken</a>) </li>");
		}
		?>
		
</body>
</html>




