<?php
interface omschrijving {
	public function getOmschrijving();
}

abstract class rekening {
	private $rekeningNr;
	private $saldo=0;

	public function stort($bedrag) {
		$this->saldo+=$bedrag;
	}
	public function getSaldo() {
		return $this->saldo;
	}
	public function setrekeningNr($rekeningNr) {
		$this->rekeningNr=$rekeningNr;
	}

}
class zichtrekening extends rekening implements omschrijving {
	private static $intrest=2.5;
	public function __construct($rekeningNr){
		parent::setrekeningNr($rekeningNr);
	}
	public function voerIntrestDoor() {
		parent::stort(parent::getSaldo()*self::$intrest/100);
	}
	public function getOmschrijving() {
		return "Kortetermijnrekening";
	}
}
class spaarrekening extends rekening implements omschrijving{
	private static $intrest=3;
	public function __construct($rekeningNr){
		parent::setrekeningNr($rekeningNr);
	}
	public function voerIntrestDoor() {
		parent::stort(parent::getSaldo()*self::$intrest/100);
	}
	public function getOmschrijving() {
		return "Langetermijnrekening";
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
		$rek = new spaarrekening("091-0122401-16");
		print("het saldo is: ".$rek->getSaldo() . "<br>");
		$rek->stort(200);
		print("Het saldo is: " . $rek->getSaldo() . "<br>");
		$rek->voerIntrestDoor();
		print("Het saldo is: " .$rek->getSaldo() . "<br>");
		print($rek->getOmschrijving());
		$rek2 = new zichtrekening("091-0122401-16");
		print("het saldo is: ".$rek2->getSaldo() . "<br>");
		$rek2->stort(200);
		print("Het saldo is: " . $rek2->getSaldo() . "<br>");
		$rek2->voerIntrestDoor();
		print("Het saldo is: " .$rek2->getSaldo() . "<br>");
		print($rek2->getOmschrijving());


		?>
	</h1>
</body>
</html>




