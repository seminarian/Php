<?php
require_once("business/uitleningservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");

$klantenLijst = KlantService::getKlanten();

if(isset($_GET["action"]) && $_GET["action"]=="leenuit") {
ExemplaarService::huurFilm($_POST["exemplaarnummer"]);
UitleningService::addUitlening($_POST["klantID"],$_POST["exemplaarnummer"],date("Y/m/d"),$_POST["periode"]);
print("Film Uitgeleend.");
header("location:toonallefilms.php");
exit(0);

} else {
	include("presentation/leenuit.php");
}


?>