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
			$dbh->exec($sql);
			$id = $dbh->lastInsertId();
			if($id == 0) {
				Throw new VerkeerdIdException();
			}
			print("ID: " . $id);
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


		public static function checkByIdUitgeleendStatus($id) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select * from exemplaren where exemplaarID = " . $id . " and uitgeleend=0";
			$resultSet = $dbh->query($sql);
			if($resultSet && $resultSet->rowCount()>0) {
			print($sql);
			print($resultSet->rowCount());
			$rij = $resultSet->fetch();
			$exemplaar = New Exemplaar($rij["exemplaarID"],$rij["filmID"],$rij["uitgeleend"]);
			$dbh = null;
			return $exemplaar;
			} else {
				Throw new VerkeerdIdException();
			}
		}
		public static function checkByIdAanwezigStatus($id) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select * from exemplaren where exemplaarID = " . $id . " and uitgeleend=1";
			$resultSet = $dbh->query($sql);
			if($resultSet && $resultSet->rowCount()>0) {
			print($sql);
			print($resultSet->rowCount());
			$rij = $resultSet->fetch();
			$exemplaar = New Exemplaar($rij["exemplaarID"],$rij["filmID"],$rij["uitgeleend"]);
			$dbh = null;
			return $exemplaar;
			} else {
				Throw new VerkeerdIdException();
			}
		}

		public static function getLastId() {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select exemplaarID, filmID, uitgeleend from exemplaren";
			// $sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
			$resultSet = $dbh->query($sql);
			$id = $dbh->lastInsertId();
			print($id);
		}
	}



?>