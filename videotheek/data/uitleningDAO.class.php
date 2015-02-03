<?php
require_once("entities/uitlening.class.php");
require_once("data/dbconfig.class.php");
class UitleningDAO {
	public static function getAll() {
		$lijst = array();
		$dbh = New PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$sql = "select * from uitleningen";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$uitlening = New Uitlening($rij["uitleenID"],$rij["klantID"],$rij["exemplaarID"],$rij["datumuitlening"],$rij["periode"],$rij["teruggebracht"],$rij["datumretour"]);
			array_push($lijst, $uitlening);
		}
		return $lijst;
	}
}

?>