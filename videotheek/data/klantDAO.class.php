<?php
require_once("entities/klant.class.php");
require_once("data/dbconfig.class.php");
class KlantDAO {
	public static function getAll() {
		$lijst = array();
		$dbh = New PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$sql = "select * from klanten";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$klant = New Klant($rij["klantID"],$rij["voornaam"],$rij["achternaam"],$rij["adres"],$rij["postcode"],$rij["plaats"],$rij["telefoonnummer"],$rij["emailadres"]);
			array_push($lijst, $klant);
		}
		return $lijst;
	}
}

?>