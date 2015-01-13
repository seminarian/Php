<?php class randomGetallen {
	public function arrayGeneratorGetallen() {
		$freqtab=array();
		for($i=1;$i<41;$i++){
		array_push($freqtab,0);
		}
		for($i=0;$i<100;$i++) {
			$getal=rand(1,40);
			$freqtab[$getal]++;
			
		}
	return $freqtab;

	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 4.6</title>
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




