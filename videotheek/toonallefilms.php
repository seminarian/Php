<?php
require_once("business/filmservice.class.php");
$filmLijst = FilmService::getFilms();
print("test");
print_r($filmLijst);
include("presentation/toonfilms.php");
?>