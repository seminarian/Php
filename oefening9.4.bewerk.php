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
	public function updateFilm($film) {
				$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
				$sql = "update films set titel = '" . $film->getTitel() . "', duurtijd = '" . $film->getDuurtijd() . "' where id=". $film->getId();
				$dbh->exec($sql);
				print("geUpdated");
				$dbh=null;
	}
	public function getFilmById($id) {
				$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
			$sql = "select titel,duurtijd from films where id=" .$id;
			$resultset=$dbh->query($sql);
			if($resultset) {
				$rij=$resultset->fetch();
					if($rij) {
					$film= new film($id,$rij["titel"],$rij["duurtijd"]);
					return $film;
			} else return false;
		} else return false;

	}
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Film bewerken</title>
</head>
<body>
	<h1>Film bewerken</h1>
	<?php

$filmlijst = new filmLijst();
	$film=$filmlijst->getFilmById($_GET["id"]);

	?>

	<form action="oefening9.4.php?action=bewerk&id=<?php print($_GET["id"]); ?>" method="post">
	<label>Id</label><input name="id" type="text" value="<?php print($film->getId()); ?>">
	<br>
	<label>Titel</label><input name="titel" type="text" value="<?php print($film->getTitel()); ?>">
	<br>
	<label>Duurtijd</label><input name="duurtijd" type="text" value="<?php print($film->getDuurtijd()); ?>">
	<br>
	<input type="submit" value="OK">

	</form>
</body>
</html>




