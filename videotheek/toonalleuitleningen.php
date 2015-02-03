<?php
require_once("business/uitleningservice.class.php");
$uitleningenLijst = UitleningService::getUitleningen();
include("presentation/toonuitleningen.php");
?>