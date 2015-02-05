<?php
require_once("business/uitleningservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
require_once("business/filmservice.class.php");
$klantenLijst = KlantService::getKlanten();
$exemplarenLijst = ExemplaarService::getExemplaren();
require_once("exceptions/VerkeerdIdException.class.php");
include("presentation/header.html");
if(isset($_GET["action"]) && $_GET["action"]=="retour") {
try {
ExemplaarService::checkByIdAanwezigStatus($_POST["exemplaarnummer"]);
ExemplaarService::retourFilm($_POST["exemplaarnummer"]);
UitleningService::retour($_POST["exemplaarnummer"],date("Y/m/d"));
header("location:toonallefilms.php?action=retour");
exit(0);
} catch (Exception $e) {
	print("<p class='error'>Ongeldig ID of de film is al aanwezig in de videotheek.</p>");
	include("presentation/retourexemplaar.php");
	include("presentation/toonexemplaren.php");
}
} else {
	include("presentation/retourexemplaar.php");
	include("presentation/toonexemplaren.php");
}


?>