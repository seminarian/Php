<?php
require_once("business/genreservice.class.php");
require_once("business/boekservice.class.php");

if (isset($_GET["action"]) && $_GET["action"] == "process") {
	BoekService::updateBoek($_GET["id"], $_POST["txtTitel"],$_POST["selGenre"]);
	header("location: toonalleboeken.php");
	exit(0);
} else {
	$genreLijst = GenreService::toonAlleGenres();
	print_r($genreLijst);
	$boek = BoekService::haalBoekOp($_GET["id"]);
	print_r($boek);
	include("presentation/updateboekform.php");
}

?>