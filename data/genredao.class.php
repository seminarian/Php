<?php
require_once("dbconfig.class.php");
require_once("entities/genre.class.php");

class GenreDAO {
	public static function getall() {
		$lijst = array();
		$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
		$sql = "select id, omschrijving from mvc_genres";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$genre = Genre::create($rij["id"],$rij["omschrijving"]);
			array_push($lijst, $genre);
		}
		$dbh = null;
		return $lijst;
	}
}
?>