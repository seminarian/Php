<?php
require_once("data/uitleningDAO.class.php");
class UitleningService {
	public static function getUitleningen() {
		$uitleningenLijst = UitleningDAO::getAll();
		return $uitleningenLijst;
	}
}

?>