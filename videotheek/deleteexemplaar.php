<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");

$exemplarenLijst = ExemplaarService::getExemplaren();

if(isset($_GET["action"]) && $_GET["action"]=="deleteexemplaar") {
	// print("filmID: " . $_POST["filmID"]);
ExemplaarService::deleteExemplaar($_GET["id"]);
print("Exemplaar gewist.");
// header("location:toonallefilms.php");
// exit(0);

} else {
	include("presentation/deleteexemplaar.php");
}



?>