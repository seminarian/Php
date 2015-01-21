<?php
session_start();
require_once("business/userservice.class.php");
$gebruikersLijst = UserService::getLijstGebruikers();
if(isset($_GET["action"]) && $_GET["action"] == "login") {
	$toegelaten=UserService::controleerGebruiker($gebruikersLijst,$_POST["gebruikersnaam"],$_POST["wachtwoord"]);
	if ($toegelaten) {
		$_SESSION["aangemeld"] = true;
		header("location: toongeheim.php");
		exit(0);
	} else {
		unset($_SESSION["aangemeld"]);
		header("location: aanmelden.php");
		exit(0);
	}
} else {
	include("presentation/loginform.php");
}
?>