<?php
require_once("business/boekservice.class.php");
$boekenLijst = BoekService::toonAlleBoeken();
include("presentation/boekenlijst.php");
?>