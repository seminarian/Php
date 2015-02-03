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
}
?>