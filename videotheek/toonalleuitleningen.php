<?php
include("presentation/header.html");
require_once("business/uitleningservice.class.php");
require_once("business/klantservice.class.php");
require_once("business/exemplaarservice.class.php");
require_once("business/filmservice.class.php");
$uitleningenLijst = UitleningService::getUitleningen();
include("presentation/toonuitleningen.php");
?>