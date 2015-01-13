<?php
class vergelijking {
	public function getSomIsStriktPositief($getal1,$getal2) {
		$antw = (($getal1 +$getal2) > 0);
		if ($antw == true) return "JA";
		else return "NEEN";
	}
	public function getSomIsStriktNegatief($getal1,$getal2,$getal3) {
		$antw = (($getal1 +$getal2 +$getal3) < 0);
		if ($antw == true) return "JA";
		else return "NEEN";
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
			$vergelijking = new vergelijking();
			print($vergelijking->getSomIsStriktPositief(10,-19));
			?>
		</h1>
		<h1>
			<?php
			print($vergelijking->getSomIsStriktNegatief(10,-9,-5));
			?>
		</h1>
	</body>
</html>