<?php
require_once("entities/user.class.php");
require_once("dbconfig.class.php");
class UserDAO {
	public static function getAlleGebruikers() {
		$lijst = array();
		$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$sql = "select gebruikersnaam, wachtwoord from gebruikers";
		$resultSet=$dbh->query($sql);
		if ($resultSet) {
			foreach($resultSet as $rij) {
				$gebruiker = new User($rij["gebruikersnaam"],$rij["wachtwoord"]);
				array_push($lijst,$gebruiker);
			}
			return $lijst;
		} else {
			return false;
		}
	}
}
?>