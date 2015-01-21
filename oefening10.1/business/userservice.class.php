<?php
require_once("data/userdao.class.php");

class UserService {
	public static function getLijstGebruikers () {
		$lijst = UserDAO::getAlleGebruikers();
		return $lijst;
	}
	public static function controleerGebruiker($gebruikersLijst,$gebruikersnaam, $wachtwoord) {
		$gevonden=false;
		print_r($gebruikersLijst);
		foreach($gebruikersLijst as $gebruiker) {
			if (($gebruiker->getUsername() == $gebruikersnaam) && ($gebruiker->getPassword() == $wachtwoord)) {
				$gevonden = true;
			} 
		}
		if($gevonden) {
			return true;
		} else {
			return false;
		}
	}
}