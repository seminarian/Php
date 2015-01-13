<?php
class gastenboekboodschap {
	private $boodschap;
	private $auteur;
	private $datum;
	public function __construct($boodschap,$auteur,$datum) {
		$this->auteur=$auteur;
		$this->boodschap=$boodschap;
		$this->datum=$datum;
	}
	public function getBoodschap() {
		return $this->boodschap;
	}
	public function getAuteur() {
		return $this->auteur;
	}
	public function getDatum() {
		return $this->datum;
	}
	public function setboodschap($boodschap) {
		$this->boodschap=$boodschap;
	}
	public function setAuteur($auteur) {
		$this->boodschap=$boodschap;
	}
	public function setDatum($datum) {
		$this->datum=$datum;
	}
}

class gastenboekLijst {
	private $connString = "mysql:host=localhost;dbname=cursusphp";
	private $username = "root";
	private $password = "vdab";
	public function getMessages() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select auteur, boodschap, datum from gastenboek";
		$resultSet=$dbh->query($sql);
		$dbh=null;

		if ($resultSet) {
			foreach ($resultSet as $rij) {
				$entry = new gastenboekboodschap($rij["boodschap"],$rij["auteur"],$rij["datum"]);
				array_push($lijst,$entry);
			}
			return $lijst;
		} else return false;
	}
	public function addMessage($entry) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "insert into gastenboek (auteur, boodschap, datum) VALUES ('".$entry->getAuteur()."','".$entry->getBoodschap()."','".$entry->getDatum()."')";
		// print("sql:" . $sql);
		$dbh->exec($sql);
	}

}
$gastenboek = new gastenboekLijst();
if(isset($_GET["action"]) && $_GET["action"]=="voegtoe") {
	$entry = new gastenboekboodschap($_POST["bericht"],$_POST["naam"],date('Y-m-d H:i:s'));
	$gastenboek->addMessage($entry);

}


$gastenboekLijst=$gastenboek->getMessages();



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Gastenboek Oefening 9.5</title>
</head>
<body>
	<h1>Gastenboek</h1>
	<hr>
	<?php

	if($gastenboekLijst) {
		foreach($gastenboekLijst as $entry) {
			print("Auteur: " . $entry->getAuteur() . "<br>");
			print("Datum: " . $entry->getDatum() . "<br>");
			print("Boodschap: " . $entry->getBoodschap() . "<br><hr>");
		}
	} else {
		print("Nog geen boodschapen");
	}

	?>

	<form action="oefening9.5.php?action=voegtoe" method="post">
		<label>Naam: </label><input name="naam" type="text">
		<br>
		<label>Bericht: </label><input name="bericht" type="textarea">
		<br>
		<input type="submit">
	</form>

</body>
</html>




