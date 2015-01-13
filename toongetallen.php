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
			<?php
			foreach ($tabel as $getal) {
				?>
				<tr>
					<td>
							<?php print($getal);?>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>



</body>
</html>




