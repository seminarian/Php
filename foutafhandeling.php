<?php
class NegatieveStortingException extends Exception {
}

class RekeningVolException extends Exception {

}
class StortingGroterDan500Exception extends Exception {

}

class Rekening {
	private $saldo;

	public function __construct() {
		$this->saldo = 0;
	}

	public function storten ($bedrag) {
		if ($bedrag < 0) throw new NegatieveStortingException();
		if ($bedrag > 500) throw new StortingGroterDan500Exception();
		if ($this->saldo + $bedrag > 1000) throw new RekeningVolException();
		$this->saldo += $bedrag;
	}

	public function getSaldo() {
		return $this->saldo;
	}
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Test exception</title>
</head>
<body>
	<h1>Test exception</h1>
	<?php
	$rek = new Rekening();
	print_r($rek);
	print($rek->getSaldo());
	try {
		print("<p>Saldo: " . $rek->getSaldo() . "&euro;</p>");
		$rek->storten(-166);
		print("<p>Saldo: " . $rek->getSaldo() . "&euro;</p>");
	} catch (NegatieveStortingException $ex) {
		print("<p>Een negatief bedrag storten is niet mogelijk!</p>");
	}
		catch (RekeningVolException $ex) {
		print("<p>Dit bedrag kan niet gestort worden, de limeit van de rekening is 1000&euro;!</p>");
	}
	catch (StortingGroterDan500Exception $ex) {
		print("<p> storting groter dan 500 euro, dit is niet toegelaten :o");
	}
	?>
</body>
</html>




