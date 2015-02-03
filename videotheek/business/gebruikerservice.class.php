<?php
require_once("data/gebruikerDAO.class.php");

class GebruikerService {
	public static function getGebruikers() {
		$gebruikersLijst = GebruikerDAO::getAllGebruikers();
		return $gebruikersLijst;
	}
}