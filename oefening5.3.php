<?php
session_start();
class test {
	public function genereerGetal () {
		if(!isset($_SESSION["teller"])){
			$_SESSION["teller"]=0;
		}
		$_SESSION["teller"]++;
		return $_SESSION["teller"];
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening5.3</title>
</head>
<body>
	<h1><?php
	$tellerGen= new test();
	print($tellerGen->genereerGetal());



	?>
	</h1>
</body>
</html>




