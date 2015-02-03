<?php
require_once("data/klantDAO.class.php");
class KlantService {
	public static function getKlanten() {
		$klantenLijst = KlantDAO::getAll();
		return $klantenLijst;
	}
}

?>