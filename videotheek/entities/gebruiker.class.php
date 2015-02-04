<?php
class Gebruiker {
	private $gebruikersID;
	private $gebruikersnaam;
	private $wachtwoord;

	public function __construct($gebruikersID,$gebruikersnaam,$wachtwoord) {
		$this->gebruikersID = $gebruikersID;
		$this->gebruikersnaam = $gebruikersnaam;
		$this->wachtwoord = $wachtwoord;
	}

	public function getGebruikersID() {
		return $this->gebruikersID;
	}

	public function getGebruikersnaam() {
		return $this->gebruikersnaam;
	}

	public function getWachtwoord() {
		return $this->wachtwoord;
	}

	public function setGebruikersID() {
		$this->gebruikersID = $gebruikersID;
	}

	public function setGebruikersnaam() {
		$this->gebruikersnaam = $gebruikersnaam;
	}

	public function setWachtwoord() {
		$this->paswoord = $wachtwoord;
	}
}