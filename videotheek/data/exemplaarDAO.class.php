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

		public static function addExemplaar($exemplaarID, $filmID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "insert into exemplaren (exemplaarID,filmID) VALUES ('" . $exemplaarID . "','" . $filmID . "')";
//INSERT INTO `films`(`filmID`, `titel`, `afbeelding`) VALUES (6,titel,afbeelding)
		// insert into films (titel,afbeelding) VALUES ("Test","")
			// print("sql:" . $sql);
			print("Exemplaar toegevoegd.");
			$dbh->exec($sql);
			$dbh = null;
		}

		public static function deleteExemplaarByFilmId($filmID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "delete from exemplaren where filmID = " . $filmID;
			$dbh->exec($sql);
			$dbh = null;
		}

		public static function deleteExemplaar($exemplaarID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "delete from exemplaren where exemplaarID = " . $exemplaarID;
			print($sql);
			$dbh->exec($sql);
			$dbh = null;
		}

		public static function huurFilm($exemplaarID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "update exemplaren set uitgeleend=1 where exemplaarID = " . $exemplaarID;
			$dbh->exec($sql);
			$dbh = null;
		}

		public static function retourFilm($exemplaarID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "update exemplaren set uitgeleend = 0 where exemplaarID = " . $exemplaarID;
			$dbh->exec($sql);
			$dbh = null;
		}


	}
?>