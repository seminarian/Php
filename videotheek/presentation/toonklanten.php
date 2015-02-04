<div id="toonklanten">
	<h1>Lijst van alle Klanten</h1>
	<table border="1">
		<tr>
			<th><b>KlantID</b></th>
			<th><b>Voornaam</b></th>
			<th><b>Achternaam</b></th>
			<th><b>Adres</b></th>
			<th><b>Postcode</b></th>
			<th><b>Plaats</b></th>
			<th><b>Telefoonnummer</b></th>
			<th><b>Emailadres</b></th>
		</tr>
	<?php
	foreach($klantenLijst as $klant) {
	?>
		<tr>
			<td><?php print($klant->getId()); ?></td>
			<td><?php print($klant->getVoornaam());?></td>
			<td><?php print($klant->getAchternaam());?></td>
			<td><?php print($klant->getAdres());?></td>
			<td><?php print($klant->getPostcode());?></td>
			<td><?php print($klant->getPlaats());?></td>
			<td><?php print($klant->getTelefoonnummer());?></td>
			<td><?php print($klant->getEmailadres());?></td>
			
		</tr>

	<?php
	}
	
	?>
	</table>
</div>





