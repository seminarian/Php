<?php

	class Film {
		private $id;
		private $titel;
		private $afbeelding;

		//getters en setters in DAO GetbyID
		public function __construct($id,$titel,$afbeelding)  {
			$this->id = $id;
			$this->titel = $titel;
			$this->afbeelding = $afbeelding;
		}

		public function getId() {
			return $this->id;
		}
		public function getTitel() {
			return $this->titel;
		}
		public function getAfbeelding() {
			return $this->afbeelding;
		}
		public function setId($id) {
			$this->id = $id;
		}
		public function setTitel($titel) {
			$this->titel = $titel;
		}
		public function setAfbeelding($afbeelding) {
			$this->afbeelding = $afbeelding;
		}
	}
require_once("data/dbconfig.class.php");
require_once("entities/film.class.php");
	class FilmDAO {
		public function getAllFilms() {
			$lijst = array();
			$dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
			$sql = "select filmID, titel, afbeelding from films";
			// $sql = "select mvc_boeken.id as boekid, titel, genreid, omschrijving from mvc_boeken, mvc_genres where genreid = mvc_genres.id";
			$resultSet = $dbh->query($sql);
			print_r($resultSet);
				foreach($resultSet as $rij){
					$film = New Film($rij["filmID"],$rij["titel"],$rij["afbeelding"]);
					array_push($lijst,$film);
				}
				$dbh = null;
				return $lijst;
		}

}
?>