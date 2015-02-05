<?php
require_once("business/filmservice.class.php");
include("presentation/header.html");
if(isset($_GET["action"]) && $_GET["action"]=="invoer") {
	try {
$afbeelding = "images/" . $_POST["afbeelding"];
FilmService::addfilm($_POST["titel"],$afbeelding);
header("location:toonallefilms.php?action=invoertitel");
exit(0);
 } catch (Exception $e) {
 	Print("<p class='error'>Insert failed, try again.</p>");
 	include("presentation/invoertitel.php");
 }
} else {
	include("presentation/invoertitel.php");
}


?>