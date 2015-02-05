<?php
require_once("business/uitleningservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
require_once("business/filmservice.class.php");
require_once("exceptions/VerkeerdIdException.class.php");
include("presentation/header.html");
$klantenLijst = KlantService::getKlanten();
$exemplarenLijst = ExemplaarService::getExemplaren();

if(isset($_GET["action"]) && $_GET["action"]=="leenuit") {
try {

ExemplaarService::checkByIdUitgeleendStatus($_POST["exemplaarnummer"]);
ExemplaarService::huurFilm($_POST["exemplaarnummer"]);
UitleningService::addUitlening($_POST["klantID"],$_POST["exemplaarnummer"],date("Y/m/d"),$_POST["periode"]);
header("location:toonalleexemplaren.php?action=uitgeleend");
exit(0);
} catch (Exception $e) {
	print("<p class='error'>Opgeveven Exemplaarnummer bestaat niet of is al uitgeleend.</p>");
	include("presentation/leenuit.php");
	include("presentation/toonexemplaren.php");
}
} else {
	include("presentation/leenuit.php");
	include("presentation/toonexemplaren.php");
}


?>