<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");

include("presentation/header.html");
$exemplarenLijst = ExemplaarService::getExemplaren();

if(isset($_GET["action"]) && $_GET["action"]=="deleteexemplaar") {
	// print("filmID: " . $_POST["filmID"]);
ExemplaarService::deleteExemplaar($_GET["id"]);
header("location:toonalleexemplaren.php?action=wis");
exit(0);
} else {
	include("presentation/deleteexemplaar.php");
}



?>