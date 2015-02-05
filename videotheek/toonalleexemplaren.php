<?php
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");
include("presentation/header.html");
if (isset($_GET["action"]) && $_GET["action"] == "uitgeleend") {
	print("<p>Exemplaar uitgeleend.</p>");
}
$exemplarenLijst = ExemplaarService::getExemplaren();

if (isset($_GET["action"]) && $_GET["action"] == "wis") {
	print("<p>Exemplaar gewist.</p>");
}
if (isset($_GET["action"]) && $_GET["action"] == "invoerexemplaar") {
	print("<p>Exemplaar toegevoegd.</p>");
}
include("presentation/toonexemplaren.php");

?>