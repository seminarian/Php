<?php
require_once("business/boekservice.class.php");
$lijst = BoekService::toonAlleBoeken();
print("<pre>");
print_r($lijst);
print("</pre>");

?>