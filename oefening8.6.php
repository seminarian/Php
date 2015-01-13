<?php

class rekening {
	private $rekeningNr;
	private $saldo=0;
	private static $intrest=3;

	public function __construct($rekeningNr){
		$this->rekeningNr=$rekeningNr;
	}
	public function stort($bedrag) {
		$this->saldo+=$bedrag;
	}
	public function getSaldo() {
		return $this->saldo;
	}
	public function voerIntrestDoor() {
		$this->saldo+=($this->saldo*self::$intrest/100);
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 8.6</title>
</head>
<body>
	<h1>
		<?php
		$rek = new Rekening("091-0122401-16");
		print("het saldo is: ".$rek->getSaldo() . "<br>");
		$rek->stort(200);
		print("Het saldo is: " . $rek->getSaldo() . "<br>");
		$rek->voerIntrestDoor();
		print("Het saldo is: " .$rek->getSaldo() . "<br>");



		?>
	</h1>
</body>
</html>




