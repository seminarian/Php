<?php
require_once("business/userservice.class.php");
$gebruikersLijst = UserService::getLijstGebruikers();

print_r($gebruikersLijst);






?>