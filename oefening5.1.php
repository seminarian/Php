<?php
session_start();
class getalGeneratorObject {
	public function getalGenerator() {
		if (!isset($_SESSION["getal"])) $_SESSION["getal"]=rand(1,100);
		return $_SESSION["getal"];
	}
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 5.1</title>
</head>
<body>
	<h1>
	<?php
	$generator = new getalGeneratorObject();
	print($generator->getalGenerator());



	?></h1>
</body>
</html>





