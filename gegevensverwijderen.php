<?php
		$ph=new ModuleLijst();
		
if (isset($_GET["action"]) && $_GET["action"] == "verwijder") {
	$ph->deleteModule($_GET["id"]);
}
class ModuleLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select id,naam,prijs from modules order by naam";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$module = new Module($rij["id"], $rij["naam"], $rij["prijs"]);
			array_push($lijst, $module);

		}
		$dbh=null;			
			return $lijst;

	}
	public function deleteModule ($id) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "delete from modules where id = " .$id;
		$dbh->exec($sql);
		$dbh=null;
	}
}

class Module {
	private $id;
	private $naam;
	private $prijs;

	public function __construct($id, $naam, $prijs) {
		$this->id = $id;
		$this->naam = $naam;
		$this->prijs = $prijs;
	}
	public function getId() {
		return $this->id;
	}
	public function getNaam() {
		return $this->naam;
	}
	public function getPrijs() {
		return $this->prijs;
	}
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modules</title>
</head>
<body>
	<h1>Modules</h1>

	<ul>
		<?php
		$tab=$ph->getLijst();
		foreach ($tab as $module) {
			$moduleNaam = $module->getNaam();
			$moduleId = $module->getId();
			print("<li>" . $moduleNaam . " (<a href=\"gegevensverwijderen.php?action=verwijder&id=" . $moduleId . "\">Verwijderen</a>) </li>");

		}
		?>
	</ul>

	<?php /*$mlijst = new ModuleLijst();
	$mlijst->deleteModule(12);
	*/?>
</body>
</html>




