<?php
require_once("business/uitleningservice.class.php");
require_once("business/exemplaarservice.class.php");

if(isset($_GET["action"]) && $_GET["action"]=="retour") {
ExemplaarService::retourFilm($_POST["exemplaarnummer"]);
UitleningService::retour($_POST["exemplaarnummer"],date("Y/m/d"));
print("Film Geretourneerd.");
header("location:toonallefilms.php");
exit(0);

} else {
	include("presentation/retourexemplaar.php");
}


?>