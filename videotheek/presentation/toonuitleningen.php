<div id="toonuitleningen">
	<h1>Historiek van alle Uitleningen</h1>
	<table border="1">
		<tr>
			<th><b>Id</b></th>
			<th><b>KlantID</b></th>
			<th><b>Klant Naam</b></th>
			<th><b>ExemplaarID</b></th>
			<th><b>Datum Uitlening</b></th>
			<th><b>Periode</b></th>
			<th><b>Teruggebracht</b></th>
			<th><b>Datum Retour</b></th>
		</tr>
	<?php
	foreach($uitleningenLijst as $uitlening) {
	?>
		<tr>
			<td><?php print($uitlening->getId()); ?></td>
			<td><?php print($uitlening->getKlantId());?></td>
			<td><?php $klant = KlantService::getKlantById($uitlening->getKlantId());
					print($klant->getVoornaam() . " " . $klant->getAchternaam());
				 ?>
			</td>
			<td><?php print($uitlening->getExemplaarId());?></td>

			<td><?php print($uitlening->getDatumUitlening());?></td>

			<td><?php print($uitlening->getPeriode());?></td>
			<td><?php 
			if($uitlening->getTeruggebracht()) {
				print("ja");
			} else {
				print("nee");
			}
			?></td>
		<td><?php print($uitlening->getDatumRetour());?></td>
		</tr>

	<?php
	}
	
	?>
	</table>
</div>



