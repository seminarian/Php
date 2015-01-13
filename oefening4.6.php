<?php class randomGetallen {
	public function arrayGeneratorGetallen() {
		$tab=array();
		for($i=1;$i<51;$i+=2){
			array_push($tab,$i);
		}
		for($i=2;$i<=50;$i+=2){
			array_push($tab,$i);
		}
	return $tab;

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




