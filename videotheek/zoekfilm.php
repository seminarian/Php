<?php
require_once("business/filmservice.class.php");
require_once("business/exemplaarservice.class.php");
include("presentation/header.html");

if (isset($_GET["action"]) && $_GET["action"] == "zoekfilm") {
	$filmLijst = FilmService::getFilmByTitel($_POST["titel"]);
	
	if(!empty($filmLijst)) {
	include("presentation/toonfilms.php");
	} else {
		print("<p>Er is geen film gevonden met deze naam.</p>");
	}
	
} else {
	include("presentation/zoekfilm.php");
}

?>