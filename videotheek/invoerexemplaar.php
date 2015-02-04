<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");

$filmLijst = FilmService::getFilms();

if(isset($_GET["action"]) && $_GET["action"]=="invoerexemplaar") {
	// print("filmID: " . $_POST["filmID"]);
ExemplaarService::addExemplaar($_POST["exemplaarID"],$_POST["filmID"]);
header("location:toonallefilms.php");
exit(0);
} else {
	include("presentation/invoerexemplaar.php");
}



?>