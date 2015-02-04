<?php
class Exemplaar {
	private $id;
	private $filmID;
	private $uitgeleend;

	public function __construct($id,$filmID,$uitgeleend) {
		$this->id = $id;
		$this->filmID = $filmID;
		$this->uitgeleend = $uitgeleend;
	}
	
	public function getId() {
		return $this->id;
	}
	public function getFilmId() {
		return $this->filmID;
	}
	public function getUitgeleend() {
		return $this->uitgeleend;
	}

	public function setId($id) {
		$this->id = $id;
	}
	public function setFilmID($filmID) {
		$this->filmID = $filmID;
	}
	public function setUitgeleend($uitgeleend) {
		$this->uitgeleend = $uitgeleend;
	}
}