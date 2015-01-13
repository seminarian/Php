<?php
require_once("data/boekdao.class.php");
class BoekService {
	public static function toonAlleBoeken() {
		$lijst = BoekDAO::getAll();
		return $lijst;
	}
}
?>