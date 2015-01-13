<?php
require_once("data/persoondao.class.php");

class PersoonService {
	public static function getAllePersonen() {
		$personen = persoonDAO::getAll();
		return $personen;
	}
}
?>