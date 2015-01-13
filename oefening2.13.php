<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>oefening 2.13</title>
</head>
<body>
	<h1><?php
		$getal1=0;
		$getal2=1;
		print($getal1 . " " .$getal2 . " ");
		$temp=$getal1+$getal2;
		while($temp < 5000) {
			print($temp . " ");
			$getal1=$getal2;
			$getal2=$temp;
			$temp=$getal1+$getal2;
		}



		?>
	</h1>
</body>
</html>




