<?php
require_once("business/boekservice.class.php");
BoekService::verwijderBoek($_GET["id"]);
header("location: toonalleboeken.php");
exit(0);
?>