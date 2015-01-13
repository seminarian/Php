<?php
class SeizoenenArrayGenerator {
	public function getSeizoenen() {
		$ing = array();
		array_push($ing, "winter");
		array_push($ing, "lente");
		array_push($ing, "zomer");
		array_push($ing, "herfst");
		return $ing;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Arrays invullen</title>
</head>
<body>
	<h1>
	<?php
		$seizoenen= new SeizoenenArrayGenerator();
		print_r($seizoenen->getSeizoenen());





	?>




	</h1>
</body>
</html>




