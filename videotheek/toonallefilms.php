<?php
require_once("business/filmservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
include("presentation/header.html");
require_once("exceptions/VerkeerdIdException.class.php");
require_once("exceptions/LegeTabelException.class.php");
$exemplarenLijst = ExemplaarService::getExemplaren();
include("presentation/zoekopnummer.php");

if (isset($_GET["action"]) && $_GET["action"] == "invoertitel") {
	print("<p>Nieuwe film toegevoegd.</p>");
}
if (isset($_GET["action"]) && $_GET["action"] == "deletetitel") {
	print("<p>Film en alle exemplaren ervan verwijderd.</p>");
}

if (isset($_GET["action"]) && $_GET["action"] == "retour") {
	print("<p>Exemplaar geretourneerd.</p>");
}

if (isset($_GET["action"]) && $_GET["action"] == "zoek") {
	try {
	$filmLijst = FilmService::getFilmsByNummer($_POST["exemplaarnummer"]);
	include("presentation/toonfilms.php");
	} catch (Exception $e) {
		print("<p class='error'>Verkeerd ID ingegeven.</p>");
		$filmLijst = FilmService::getFilms();
		include("presentation/toonfilms.php");
	}

} else {
	$filmLijst = FilmService::getFilms();
	if(!empty($filmLijst)) {
	include("presentation/toonfilms.php");
	} else {
		print("<p>Er zijn momenteel geen films in de database.</p>");
	}

}



?>