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

	public static function addUitlening($klantID,$exemplaarID,$datumuitlening,$periode) {
		$dbh = New PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		// $sql = "insert into uitleningen (klantID,exemplaarID,datumuitlening,periode) values ('" . $klantID . "','" . $exemplaarID ."','" . $datumuitlening . "','" . $periode "')";
		$sql = "insert into uitleningen (klantID,exemplaarID,datumuitlening,periode) VALUES ('" . $klantID . "','" . $exemplaarID . "','" . $datumuitlening . "','" . $periode ."')";
		// print($sql);
		$dbh->exec($sql);
		$dbh=null;
	}

		public static function retour($exemplaarID,$datumretour) {
		$dbh = New PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		// $sql = "insert into uitleningen (klantID,exemplaarID,datumuitlening,periode) values ('" . $klantID . "','" . $exemplaarID ."','" . $datumuitlening . "','" . $periode "')";
		$sql = "update uitleningen set teruggebracht = 1, datumretour = '" . $datumretour . "' where exemplaarID = " . $exemplaarID . " and teruggebracht = 0";
		print($sql);
		$dbh->exec($sql);
		$dbh=null;
	}
}

?>