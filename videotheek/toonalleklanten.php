<?php
include("presentation/header.html");
require_once("business/klantservice.class.php");
$klantenLijst = KlantService::getKlanten();
include("presentation/toonklanten.php");
?>