<?php
require_once("data/dbconfig.class.php");
require_once("entities/film.class.php");

	class FilmDAO {

		public static function getAllFilms() {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID, titel, afbeelding from films";
			// $sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
			$resultSet = $dbh->query($sql);
			// print_r($resultSet);
			if ($resultSet->rowCount() > 0) {
			// print("Result set rows: " . $resultSet->rowCount());
				foreach($resultSet as $rij){
					$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
					array_push($lijst,$film);
				}
				$dbh = null;
				return $lijst;
			} else {
				Throw new LegeTabelException();
			}
		}

		public static function getById($id) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID, titel, afbeelding from films where filmID = " . $id;
			$resultSet = $dbh->query($sql);
			$rij = $resultSet->fetch();
			$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
			$dbh = null;
			return $film;
		}
		public static function getByIdInList($id) {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID, titel, afbeelding from films where filmID = " . $id;
			$resultSet = $dbh->query($sql);
			foreach($resultSet as $rij){
				$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
				array_push($lijst,$film);
			}
			$dbh = null;
			return $lijst;
		}

		public static function getByTitel($titel) {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID, titel, afbeelding from films where titel = " . $titel;
			$resultSet = $dbh->query($sql);
			foreach($resultSet as $rij){
				$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
				array_push($lijst,$film);
			}
			$dbh = null;
			return $lijst;
		}

		public static function getFilmsByNummer($nummer) {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID from exemplaren where exemplaarID = " . $nummer;
			$resultSet = $dbh->query($sql);
			$exemplaar = $resultSet->fetch();
			$lijst = FilmDAO::getByIdInList($exemplaar["filmID"]);
			$dbh = null;
			return $lijst;
		}



		public static function addFilm($titel, $afbeelding) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "insert into films (titel,afbeelding) VALUES ('" . $titel . "','" . $afbeelding . "')";
//INSERT INTO `films`(`filmID`, `titel`, `afbeelding`) VALUES (6,titel,afbeelding)
		// insert into films (titel,afbeelding) VALUES ("Test","")
			$dbh->exec($sql);
		}

		public static function deleteFilm($filmID) {
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "delete from films where filmID = " . $filmID;
			$dbh->exec($sql);
			$dbh = null;
		}


}
?>