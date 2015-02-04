<?php
include("presentation/header.html");
require_once("business/filmservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
require_once("business/gebruikerservice.class.php");
require_once("business/uitleningservice.class.php");
require_once("exceptions/LegeTabelException.class.php");

$exemplarenLijst = ExemplaarService::getExemplaren();
$gebruikersLijst = GebruikerService::getGebruikers();
$klantenLijst = KlantService::getKlanten();
$uitleningenLijst = UitleningService::getUitleningen();



include("presentation/deletetitel.php");
$exemplarenLijst = ExemplaarService::getExemplaren();
include("presentation/deleteexemplaar.php");
include("presentation/invoertitel.php");

include("presentation/invoerexemplaar.php");
include("presentation/leenuit.php");
include("presentation/retourexemplaar.php");
include("presentation/toonexemplaren.php");
if (isset($_GET["action"]) && $_GET["action"] == "zoek") {
	$filmLijst = FilmService::getFilmsByNummer($_POST["exemplaarnummer"]);
} else {
	try {
	$filmLijst = FilmService::getFilms();
	include("presentation/toonfilms.php");
		} catch (LegeTabelException $ex) {
	Print("De tabel met films is leeg. Er zijn geen films te tonen.");
	}
}
include("presentation/toongebruikers.php");
include("presentation/toonklanten.php");
include("presentation/toonuitleningen.php");

include("presentation/footer.html");
?>