<?php
session_start();
$spelstop=false;
if (!empty($_GET["reset"])) {

if ($_GET["reset"] == 1) {
	unset($_SESSION["aantallucifers"]);

}
}
if(!isset($_SESSION["aantallucifers"])) {
$_SESSION["aantallucifers"]=7;
}
if(isset($_GET["aantal"]) && $_SESSION["aantallucifers"] > 0) {
	if ($_SESSION["aantallucifers"]-$_GET["aantal"] > 0)
	$_SESSION["aantallucifers"]-=$_GET["aantal"];
	else $spelstop=true;
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Luciferspel</title>
</head>
<body>
	<h1>Luciferspel</h1>
	<?php

	if ($spelstop) {
		print("<p>Het spel is afgelopen.</p>");
	} else {
			for ($i=0;$i<$_SESSION["aantallucifers"];$i++) {
					print("<img src='images/lucifer.png'>");
	}

	?>
	<form action="oefening7.6.php?aantal=1" method="post">
		<input type="submit" value="Eén lucifer wegnemen">
	</form>
		<form action="oefening7.6.php?aantal=2" method="post">
		<input type="submit" value="Twee lucifer wegnemen">
		</form>
		<?php } ?>
	<p>Klik <a href="oefening7.6.php?reset=1">hier</a> om een nieuw spel te beginnen. </p>

</body>
</html>




