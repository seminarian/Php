<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 7.3</title>
</head>
<body>
	<table border="1">
		<tbody>
			<tr>
				<td></td>
				<?php
				for ($i=1;$i<11;$i++) {
					?> <td> <?php
					print($i); ?> </td> <?php
				} ?>
			</tr>
			<?php
			for ($j=1;$j<11;$j++) {
				?>

				<tr><td>
				  <?php print($j); ?> </td> 
				<?php
				
					for ($i=1;$i<11;$i++) {
						?>
						<td><?php print($i*$j); ?> </td>
						<?php
					}
					?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>




