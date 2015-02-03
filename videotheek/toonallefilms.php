<?php
require_once("business/filmservice.class.php");
require_once("business/exemplaarservice.class.php");

if (isset($_GET["action"]) && $_GET["action"] == "zoek") {
	$filmLijst = FilmService::getFilmsByNummer($_POST["exemplaarnummer"]);
} else {
	$filmLijst = FilmService::getFilms();
}
include("presentation/toonfilms.php");
?>