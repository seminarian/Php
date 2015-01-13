<?php
require_once("module.class.php");
class ModuleLijst {
	private $dbConn;
	private $dbUsername;
	private $dbPassword;
	public function __construct() {
		$this->dbConn = "mysql:host=localhost;dbname=cursusphp";
		$this->dbUsername = "root";
		$this->dbPassword = "vdab";
	}
	public function getLijst() {
		$lijst = array();
		$sql = "select id, naam, prijs from modules order by naam";
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$module = new Module($rij["id"], $rij["naam"], $rij["prijs"]);
			array_push($lijst, $module);
		}
		$dbh = null;
		return $lijst;

	}
	public function getModuleById($id) {
		$sql = "select naam, prijs from modules where id = ". $id;
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$resultSet = $dbh->query($sql);
		if ($resultSet) {
			$rij = $resultSet->fetch();
			if ($rij) {
				$module = new Module($id, $rij["naam"], $rij["prijs"]);
				$dbh = null;
				return $module;
			} else return false;
		} else return false;

		
	}

	public function updateModule($module) {
		$sql = "update modules set naam ='" .$module->getNaam() . "', prijs = " .$module->getPrijs() . " where id = " .$module->getId();
		print("sql:".$sql.$module->getId());
		print("module get id:".$module->getId());
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$dbh->exec($sql);
		$dbh=null;
	}
}
?>