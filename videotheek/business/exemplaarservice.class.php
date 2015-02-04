<?php
require_once("data/exemplaarDAO.class.php");
class ExemplaarService {
	public static function getExemplaren() {
		$exemplarenLijst = ExemplaarDAO::getAllExemplaren();
		return $exemplarenLijst;
	}
	public static function getExemplarenByFilmId($filmID) {
		$exemplarenLijst = ExemplaarDAO::getExemplarenByFilmId($filmID);
		return $exemplarenLijst;
	}

	public function addExemplaar($exemplaarID,$filmID) {
		ExemplaarDAO::addExemplaar($exemplaarID,$filmID);
	}

	public function deleteExemplaarByFilmId($filmID) {
		ExemplaarDAO::deleteExemplaarByFilmId($filmID);
	}

	public function deleteExemplaar($exemplaarID) {
		ExemplaarDAO::deleteExemplaar($exemplaarID);
	}

	public function huurFilm($exemplaarID) {
		ExemplaarDAO::huurFilm($exemplaarID);
	}

	public function retourFilm($exemplaarID) {
		ExemplaarDAO::retourFilm($exemplaarID);
	}

}
?>