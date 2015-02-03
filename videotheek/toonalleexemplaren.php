<?php
require_once("business/exemplaarservice.class.php");
$exemplarenLijst = ExemplaarService::getExemplaren();
include("presentation/toonexemplaren.php");
?>