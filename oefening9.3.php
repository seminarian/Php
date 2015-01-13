<?php
class film {
	private $titel;
	private $duurtijd;
	private $id;
	public function __construct($id,$titel,$duurtijd) {
		$this->id=$id;
		$this->titel=$titel;
		$this->duurtijd=$duurtijd;
	}
	public function getId() {
		return $this->id;
	}
		public function getTitel() {
		return $this->titel;
	}
		public function getDuurtijd() {
		return $this->duurtijd;
	}
}
class filmLijst {
	public function filmToevoegen($titel,$duurtijd) {

				$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
				$sql = "insert into films (titel,duurtijd) values ('" .$titel . "', " . $duurtijd . ")";
				$dbh->exec($sql);
				$laatsteId = $dbh->lastInsertId();
				print("laatste ID".$laatsteId);
				$dbh=null;
	}

	public function getLijst() {
				$lijst= array();
				$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
				$sql = "select id, titel, duurtijd from films";
				$resultset=$dbh->query($sql);
				foreach ($resultset as $rij) {
					$film= new film($rij["id"],$rij["titel"],$rij["duurtijd"]);
					array_push($lijst, $film);
				}
				$dbh=null;
				return $lijst;		
	}
	public function deleteFilm($id) {
				$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
				$sql = "delete from films where id=".$id;
				$dbh->exec($sql);
				print("verwijderd");
				$dbh=null;
	}
}



$mlijst= new filmLijst();
if (isset($_GET["action"]) && $_GET["action"]=="verwijder" ) {
	$mlijst->deleteFilm($_GET["id"]);
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 9.2</title>
</head>
<body>
	<h1>Alle films</h1>
	<ul>
	<?php
	$mlijst= new filmLijst();

	if (!empty($_POST["titel"])) {
		$titel=$_POST["titel"];
		$duurtijd=$_POST["duurtijd"];
		$mlijst->filmToevoegen($titel,$duurtijd);
	}
		$filmlijst=$mlijst->getLijst();
	foreach ($filmlijst as $film) {
		print("<li>".$film->getTitel()." (".$film->getDuurtijd().") <a href=\"oefening9.3.php?action=verwijder&id=".$film->getId()."\">Verwijderen</a>.<a href=\"oefening9.3.php?action=verwijder&id=".$film->getId()."\">Verwijderen</a></li>");
	}
	?>
	</ul>

	<h1>Film toevoegen</h1>
	<form action="oefening9.3.php" method="POST">
	<label>titel</label><input type="text" name="titel">
	<br>
	<label>duurtijd</label><input type="text" name="duurtijd">minuten
	<br>
	<input type="submit" value="toevoegen">
	</form>

</body>
</html>




