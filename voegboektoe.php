<?php
require_once("business/genreservice.class.php");
require_once("business/boekservice.class.php");

if (isset($_GET["action"]) && $_GET["action"] == "process") {
	print("boek aant toevegen:");
	print("titel" . $_POST["txtTitel"] . " genre " . $_POST["selGenre"]);
	BoekService::voegNieuwBoekToe($_POST["txtTitel"], $_POST["selGenre"]);
	header("location: toonalleboeken.php");
	exit(0);
	// include("presentation/nieuwboekform.php");

} else {
	$genreLijst = GenreService::toonAlleGenres();
	include("presentation/nieuwboekform.php");
}