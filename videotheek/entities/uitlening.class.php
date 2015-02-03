<?php
class Uitlening {
	private $uitleenID;
	private $klantID;
	private $exemplaarID;
	private $datumuitlening;
	private $periode;
	private $teruggebracht;
	private $datumretour;

	public function __construct($uitleenID,$klantID,$exemplaarID,$datumuitlening,$periode,$teruggebracht,$datumretour) {
		$this->uitleenID = $uitleenID;
		$this->klantID = $klantID;
		$this->exemplaarID = $exemplaarID;
		$this->datumuitlening = $datumuitlening;
		$this->periode = $periode;
		$this->teruggebracht = $teruggebracht;
		$this->datumretour = $datumretour;
	}

	public function getId() {
		return $this->uitleenID;
	}

	public function getKlantId() {
		return $this->klantID;
	}

	public function getExemplaarId() {
		return $this->exemplaarID;
	}

	public function getDatumUitlening() {
		return $this->datumuitlening;
	}

	public function getPeriode() {
		return $this->periode;
	}

	public function getTeruggebracht() {
		return $this->teruggebracht;
	}

	public function getDatumRetour() {
		return $this->datumretour;
	}	
}
?>