<?php
class Calculator {
	public function berekenSom($getal1,$getal2) {
		return ($getal1+$getal2);
	}
	public function berekenKwadraat($getal) {
		return ($getal * $getal);
	}
	public function berekenProduct($getal1,$getal2) {
		return ($getal1 * $getal2);
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
		<style type="text/css">
			h1 {color:red;}
		</style>
	</head>
	<body>
		<h1>
			<?php
			$rekenmachien = new Calculator();
			print($rekenmachien->berekenSom(65,14));
			?>
		</h1>
		<h1>
			<?php
			print($rekenmachien->berekenSom(34,55));
			?>
		</h1>
		<h1>
			<?php
			print($rekenmachien->berekenKwadraat(34));
			?>
		</h1>
		<h1>
			<?php
			print($rekenmachien->berekenProduct(34,65));
			?>
		</h1>
	</body>
</html>