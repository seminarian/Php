<?php
require_once("data/boekdao.class.php");
$boek  = BoekDAO::getByID(1);
print_r($boek);

?>