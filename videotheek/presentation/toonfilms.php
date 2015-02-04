<div id="toonfilms">
	<h1>Lijst van alle films</h1>
	<table border="1">
		<tr>
			<th><b>Titel</b></th>
			<th><b>Nummer(s)</b></th>
			<th><b>Exemplaren aanwezig</b></th>
		</tr>
	<?php
	foreach($filmLijst as $film) {
	?>
		<tr>
			<td><?php print($film->getTitel()); ?></td>
			<td><?php $teller = 0;$exemplarenLijst = ExemplaarService::getExemplarenByFilmId($film->getId());
				foreach($exemplarenLijst as $exemplaar) {
				 	if(!$exemplaar->getUitgeleend()) {
				 	print("<b>" . $exemplaar->getId() . " </b>");
				 	$teller++;
				 	} else {
				 	print($exemplaar->getId() . " ");
				 	}
				}
				 ?>
			</td>
			<td>
				<?php print($teller); ?>
			</td>
			<td>
				<a href="deletetitel.php?action=deletetitel&id=<?php print($film->getId()); ?>">Verwijder</a>
			</td>
		</tr>

	<?php
	}
	
	?>
	</table>
	<?php include("presentation/zoekopnummer.php"); ?>
</div>



