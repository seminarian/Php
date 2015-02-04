<?php
require_once("business/filmservice.class.php");

if(isset($_GET["action"]) && $_GET["action"]=="invoer") {
FilmService::addfilm($_POST["titel"],$_POST["afbeelding"]);
print("Titel toegevoegd.");
header("location:toonallefilms.php");
exit(0);
} else {
	include("presentation/invoertitel.php");
}


?>