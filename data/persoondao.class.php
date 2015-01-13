<?php
require_once("entities/persoon.class.php");
require_once("dbconfig.class.php");

class PersoonDAO {
	public static function getAll() {
		$lijst = array();
		$sql = "select familienaam, voornaam from personen";
		$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$persoon = new Persoon($rij["familienaam"],$rij["voornaam"]);
			array_push($lijst, $persoon);
		}
		$dbh=null;
		return $lijst;


	}
	// public static function getAll() {
	// 	$lijst = array();
	// 	array_push($lijst, new Persoon("Peeters", "Bram"));
	// 	array_push($lijst, new Persoon("Van Dessel", "Rudy"));
	// 	array_push($lijst, new Persoon("Vereecken", "Marie"));
	// 	array_push($lijst, new Persoon("Maes", "Eveline"));
	// 	return $lijst;
	// }

}