<?php
require_once("business/filmservice.class.php");

if(isset($_GET["action"]) && $_GET["action"]=="invoer") {
FilmService::addfilm($_POST["titel"],$_POST["afbeelding"]);
} else {
	include("presentation/invoertitel.php");
}


?>