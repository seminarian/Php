<?php class randomGetallen {
	public function arrayGeneratorGetallen() {
		$tab=array();
		$getal=rand(1,100);
		array_push($tab,$getal);
		while ($getal<=80) {
				$getal=rand(1,100);
			array_push($tab,$getal);
		}
	return $tab;

	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 4.5</title>
</head>
<body>
	<h1>
	<?php
	$getallen = new randomGetallen();
	print_r($getallen->arrayGeneratorGetallen());

	?>




	</h1>
</body>
</html>




