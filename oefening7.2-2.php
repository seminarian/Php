<?php
$getal=$_POST["getal"];
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 7.2 - pagina 2</title>
</head>
<body>
	<table border="1">
		<tbody>
			<thead>
				<tr><td colspan="2">De tafel van <?php print($getal); ?></td></tr>
			</thead>
			<?php 
			for($i=1;$i<11;$i++) {
				?>
				<tr>
					<td style="text-align:right;"><?php print($i." maal ".$getal."</td><td>".($i*$getal)."</td></tr>"); 
				}
				?>
			</tbody>
		</table>
	</body>
	</html>




