<?php
class Klant {
	private $id;
	private $voornaam;
	private $achternaam;
	private $adres;
	private $postcode;
	private $plaats;
	private $telefoonnummer;
	private $emailadres;

	public function __construct($id,$voornaam,$achternaam,$adres,$postcode,$plaats,$telefoonnummer,$emailadres) {
		$this->id = $id;
		$this->voornaam = $voornaam;
		$this->achternaam = $achternaam;
		$this->adres = $adres;
		$this->postcode = $postcode;
		$this->plaats = $plaats;
		$this->telefoonnummer = $telefoonnummer;
		$this->emailadres = $emailadres;
	}

	public function getId() {
		return $this->id;
	}
	public function getVoornaam() {
		return $this->voornaam;
	}
	public function getAchternaam() {
		return $this->achternaam;
	}
	public function getAdres() {
		return $this->adres;
	}
	public function getPostcode() {
		return $this->postcode;
	}
	public function getPlaats() {
		return $this->plaats;
	}
	public function getTelefoonnummer() {
		return $this->telefoonnummer;
	}
	public function getEmailadres() {
		return $this->emailadres;
	}

	public function setId($id) {
	$this->id = $id;
	}
	public function setVoornaam($voornaam) {
	$this->voornaam = $voornaam;
	}
	public function setAchternaam($achternaam) {
	$this->achternaam = $achternaam;
	}
	public function setAdres($adres) {
	$this->adres = $adres;
	}
	public function setPostcode($postcode) {
	$this->postcode = $postcode;
	}
	public function setPlaats($plaats) {
	$this->plaats = $plaats;
	}
	public function setTelefoonnummer($telefoonnummer) {
	$this->telefoonnummer = $telefoonnummer;
	}
	public function setEmailadres($emailadres) {
	$this->emailadres = $emailadres;
	}
}