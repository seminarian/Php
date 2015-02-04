<?php
require_once("business/filmservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
$exemplarenLijst = ExemplaarService::getExemplaren();

if (isset($_GET["action"]) && $_GET["action"] == "zoek") {
	$filmLijst = FilmService::getFilmsByNummer($_POST["exemplaarnummer"]);
} else {
	try{
	$filmLijst = FilmService::getFilms();
	include("presentation/toonfilms.php");
	} catch (LegeTabelException $ex) {
	Print("De tabel met films is leeg. Er zijn geen films te tonen.");
	}
}



?>