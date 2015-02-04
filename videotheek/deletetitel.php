<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");

$filmLijst = FilmService::getFilms();

if(isset($_GET["action"]) && $_GET["action"]=="deletetitel") {
	// print("filmID: " . $_POST["filmID"]);
ExemplaarService::deleteExemplaarByFilmId($_GET["id"]);
FilmService::deleteFilm($_GET["id"]);
print("Titel gewist (alsook exemplaren van deze film).");
header("location:toonallefilms.php");
exit(0);
} else {
	include("presentation/deletetitel.php");
}



?>