<?php
require_once("getallenreeksmaker.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Getallenreeks</title>
</head>
<body>
	<?php
	$getReeks = new GetallenReeksMaker();
	$tabel = $getReeks->getReeks();
	?>
	<table border="1">
		<tbody>
		<tr>
			<?php
			foreach ($tabel as $getal) {
				?>
				
					<td>
							<?php print($getal);?>
					</td>
				
				<?php
			}
			?>
			</tr>
		</tbody>
	</table>



</body>
</html>




