<?php
require_once("data/dbconfig.class.php");
require_once("entities/exemplaar.class.php");

	class ExemplaarDAO {

		public static function getAllExemplaren() {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select exemplaarID, filmID, uitgeleend from exemplaren";
			// $sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
			$resultSet = $dbh->query($sql);
			// print_r($resultSet);
				foreach($resultSet as $rij){
					$exemplaar = New Exemplaar($rij["exemplaarID"],$rij["filmID"],$rij["uitgeleend"]);
					array_push($lijst,$exemplaar);
				}
				$dbh = null;
				return $lijst;
		}

		public static function getExemplarenByFilmId($filmID) {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select exemplaarID, filmID, uitgeleend from exemplaren where filmID = " . $filmID;
			// $sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
			$resultSet = $dbh->query($sql);
			// print_r($resultSet);
				foreach($resultSet as $rij){
					$exemplaar = New Exemplaar($rij["exemplaarID"],$rij["filmID"],$rij["uitgeleend"]);
					array_push($lijst,$exemplaar);
				}
				$dbh = null;
				return $lijst;
		}
	}
?>