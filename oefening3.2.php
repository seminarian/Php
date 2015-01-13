<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 3.2</title>
</head>
<body>
	<h1>
		<?php
		$getal1=$_GET["getal1"];
		$getal2=$_GET["getal2"];
		$keuze=$_GET["keuze"];
		$som=$getal1+$getal2;
		$verschil=$getal1-$getal2;
		$product=$getal1*$getal2;


		SWITCH ($keuze) {
			case 1:
			print("Som: " . $som);
			break;
			case 2:
			print("Verschil: " . $verschil);
			break;
			case 3:
			print("Product: " . $product);
			break;
			case 4:
			$deling=$getal1/$getal2;	//opletten deling door NUL!
			print("Quotient: " . $deling);
			break;
			default:
			print("Geen juiste bewerking gespecifieerd");									
		}



		?>


	</h1>
</body>
</html>




