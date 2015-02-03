<?php
require_once("business/gebruikerservice.class.php");
$gebruikersLijst = GebruikerService::getGebruikers();
include("presentation/toongebruikers.php");
?>