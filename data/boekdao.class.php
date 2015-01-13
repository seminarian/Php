<?php
require_once("dbconfig.class.php");
require_once("entities/genre.class.php");
require_once("entities/boek.class.php");

class BoekDAO {
	public static function getAll() {
		$lijst = array();

		$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$genre = Genre::create($rij["genreid"],$rij["omschrijving"]);
			$boek = boek::create($rij["boekid"],$rij["titel"], $genre);
			array_push($lijst, $boek);
		}
		$dbh = null;
		return $lijst;
	}
}