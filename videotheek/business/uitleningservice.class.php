<?php
require_once("data/uitleningDAO.class.php");
class UitleningService {
	public static function getUitleningen() {
		$uitleningenLijst = UitleningDAO::getAll();
		return $uitleningenLijst;
	}

	public static function addUitlening($klantID,$exemplaarID,$datumuitlening,$periode) {
		UitleningDAO::addUitlening($klantID,$exemplaarID,$datumuitlening,$periode);
	}

	public static function retour($exemplaarID,$datumretour) {
		UitleningDAO::retour($exemplaarID,$datumretour);
	}
}

?>