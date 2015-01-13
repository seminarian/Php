<?php

class vierOpEenRij {
	public function laadBordInArray() {
		$spelbord = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select rijnummer, kolomnummer, status from vieropeenrij_spelbord";
		$resultSet = $dbh->query($sql);
		// print("sql: " . $sql);
		if ($resultSet) {
			foreach ($resultSet as $vakje) {
				$spelbord[$vakje["rijnummer"]][$vakje["kolomnummer"]]=$vakje["status"];
			}
			return $spelbord;
		} else return false;
	}
	public function tekenBord($spelbord) {
		print("<br>");
		for($i=1;$i<7;$i++) {
			for($j=1;$j<8;$j++) {
				if ($spelbord[$i][$j] == 0 ) {
					print ("<a href='spelen.php?kolom=" . $j . "'><img src='emptyslot.png'></a>");
				} else if ($spelbord[$i][$j] == 1 ) {
					print ("<a href='spelen.php?kolom=" . $j . "'><img src='yellowslot.png'></a>");
				} else {
					print ("<a href='spelen.php?kolom=" . $j . "'><img src='redslot.png'></a>");
				}

			}
			print("<br>");
		}
	}
	public function voegToe($kolom,$kleur,$bord) {
		$rij=1;
		while($bord[$rij][$kolom] == 0 && $rij < 6) {
				$rij++;

		}
		if($bord[$rij][$kolom] != 0)
		$rij--;
		$sql = "UPDATE vieropeenrij_spelbord SET status=" . $kleur . " WHERE kolomnummer=" . $kolom . " AND rijnummer=" .$rij;
		// print($sql);
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$dbh->exec($sql);
	}
	public function resetBord(){
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "UPDATE vieropeenrij_spelbord SET status=0 WHERE status!=0";
		$dbh->exec($sql);
	}
	
}
session_start();
if (isset($_GET["kleur"]) && $_GET["kleur"] == "geel") {
	$_SESSION["kleur"] = "geel";
	$_SESSION["status"] = 1;
	print("Uw kleur is geel.");
} elseif (isset($_GET["kleur"])) {
	$_SESSION["kleur"] = "rood";
	$_SESSION["status"] = 2;
	print("Uw kleur is rood.");
} 
$spelbord = new vierOpEenRij();
if (isset($_GET["action"]) && $_GET["action"]=="reset") {
	$spelbord->resetBord();
}

$bord = $spelbord->laadBordInArray();
if (isset($_GET["kolom"])) {
	$spelbord->voegToe($_GET["kolom"],$_SESSION["status"],$bord);
}
$bord = $spelbord->laadBordInArray();








?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<title>Vier Op een Rij By DoMS</title>
</head>
<body>
	<h1>Vier Op een Rij By DoMS</h1>
	<p>Jouw kleur is <?php print($_SESSION["kleur"]); ?> </p>
	<?php $spelbord->tekenBord($bord); ?>
	<a href="spelen.php?action=reset">Reset bord</a>
	<a href="spelen.php">Vernieuw bord</a>
	<a href="kleurkeuze.php">Kleur kiezen</a>
</body>
</html>




