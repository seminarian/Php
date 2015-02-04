<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");
$exemplarenLijst = ExemplaarService::getExemplaren();
include("presentation/toonexemplaren.php");
?>