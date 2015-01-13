<?php
	if(!empty($_POST["txtNaam"])) {
		setcookie("ingevuldeNaam", $_POST["txtNaam"], time() +120 );
		$naam = $_POST["txtNaam"];
	} else {
		if(isset($_COOKIE["ingevuldeNaam"])){
			$naam = $_COOKIE["ingevuldeNaam"];
		} else {
			$naam = "onbekend";
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>cookies</title>
</head>
<body>
	
		<?php 
		if (isset($naam)) {
			print("Welkom, ") . $naam;
		}
		?>
		<form action="cookies.php" method="post">
			Uw naam: <input type="text" name="txtNaam" value="<?php print($naam);?>">
		<input type="submit" value="Versturen">
		</form>
		<br>
		<a href="cookies.php">Vernieuw de pagina</a>


	
</body>
</html>




