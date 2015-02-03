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
				foreach($resultSet as $rij){
					$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
					array_push($lijst,$film);
				}
				$dbh = null;
				return $lijst;
		}

		public static function getById($id) {
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
}
?>