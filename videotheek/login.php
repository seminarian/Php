<?php
require_once("business/gebruikerservice.class.php");
session_start();
if(isset($_GET["action"]) && $_GET["action"]=="login") {
	$geldigelogin = GebruikerService::checkLogin($_POST["gebruikersnaam"],$_POST["wachtwoord"]);
	if($geldigelogin) {
		$_SESSION["ingelogd"] = true;
		header("location:index.php");
		exit(0);
	}
}
$_SESSION["ingelogd"] = false;
if(!$_SESSION["ingelogd"]) {
	include("presentation/loginform.php");
} else {
	header("location:index.php");
	exit(0);
}


?>