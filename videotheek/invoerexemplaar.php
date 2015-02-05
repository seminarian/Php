<?php
require_once("business/uitleningservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/klantservice.class.php");
require_once("business/filmservice.class.php");
require_once("exceptions/VerkeerdIdException.class.php");
include("presentation/header.html");
ExemplaarDAO::getLastId();
if (isset($_GET["action"]) && $_GET["action"] == "invoerexemplaardone") {
	print("<p>Exemplaar toegevoegd.</p>");
}
$klantenLijst = KlantService::getKlanten();
$exemplarenLijst = ExemplaarService::getExemplaren();
$filmLijst = FilmService::getFilms();

if(isset($_GET["action"]) && $_GET["action"]=="invoerexemplaar") {
	// print("filmID: " . $_POST["filmID"]);
	try {
	ExemplaarService::addExemplaar($_POST["exemplaarID"],$_POST["filmID"]);
	header("location:invoerexemplaar.php?action=invoerexemplaardone");
	exit(0);
	} catch (Exception $e) {
		print("<p class='error'>Er bestaat al een exemplaar met opgegeven ID.</p>");
		include("presentation/invoerexemplaar.php");
		include("presentation/toonexemplaren.php");
	}


} else {
	include("presentation/invoerexemplaar.php");
	include("presentation/toonexemplaren.php");
}



?>