<?php
include("presentation/header.html");
require_once("business/gebruikerservice.class.php");
$gebruikersLijst = GebruikerService::getGebruikers();
include("presentation/toongebruikers.php");
?>