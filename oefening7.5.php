<?php
session_start();

if ($_GET["reset"] == 1) unset($_SESSION["deuren"]);

if (!isset($_SESSION["deuren"])) {
	$_SESSION["schat"]=rand(1,7);
	$_SESSION["teller"]=0;
	$_SESSION["deuren"] = array();
	$_SESSION["gevonden"]=false;
	for ($i=1;$i<8;$i++) {
		$_SESSION["deuren"][$i]=0;
		print($_SESSION["deuren"][$i]);
	}
}

if (isset($_GET["kiesdeur"])) {
	$gekozenDeurNr = $_GET["kiesdeur"];
	if ($gekozenDeurNr == $_SESSION["schat"]) {
		$_SESSION["deuren"][$gekozenDeurNr] = 2;
		$_SESSION["gevonden"]=true;
		$_SESSION["teller"]++;
	} else {
		$_SESSION["deuren"][$gekozenDeurNr] = 1;
		$schatdeur=$_SESSION["schat"];
		$_SESSION["teller"]++;
	}
}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 7.5</title>
</head>
<body>
	<h1>Kies een deur</h1>
	<?php

	for($i=1;$i<8;$i++) {
		?>
		<?php 
		if($_SESSION["gevonden"]==false) {
			?>
			<a href="oefening7.5.php?kiesdeur=<?php print($i); ?> ">
				<?php
			}?>
			<img src="images <?php 
			if ($_SESSION["deuren"][$i]==0) {
				print("/doorclosed.png");
			} elseif ($_SESSION["deuren"][$i]==1) {
				print("/dooropen.png");
			} elseif ($_SESSION["deuren"][$i]==2) {
				print("/doortreasure.png");
			}


			?> ">
			<?php
			if($_SESSION["gevonden"]==false) {
				?>
			</a>
			<?php
		}
		?>
		<?php
	}
	?>

	<p>Klik <a href="oefening7.5.php?reset=1">hier</a> om een nieuw spel te beginnen.</p>
		<?php print("Aantal gedane pogingen: ".$_SESSION["teller"]);?>
</body>
</html>




