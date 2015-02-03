<?php
require_once("data/dbconfig.class.php");
require_once("entities/gebruiker.class.php");

	class GebruikerDAO {

		public static function getAllGebruikers() {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select gebruikersID, gebruikersnaam, wachtwoord from gebruikers";
			$resultSet = $dbh->query($sql);
				foreach($resultSet as $rij){
					$gebruiker = New Gebruiker($rij["gebruikersID"],$rij["gebruikersnaam"],$rij["wachtwoord"]);
					array_push($lijst,$gebruiker);
				}
				$dbh = null;
				return $lijst;
		}
	}
?>