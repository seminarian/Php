	<h1>Lijst van alle gebruikers</h1>
	<table border="1">
		<tr>
			<th><b>GebruikersID</b></th>
			<th><b>Gebruiker</b></th>
			<th><b>Wachtwoord</b></th>
		</tr>
	<?php
	foreach($gebruikersLijst as $gebruiker) {
	?>
		<tr>
			<td><?php print($gebruiker->getGebruikersID()); ?></td>
			<td><?php print($gebruiker->getGebruikersnaam()); ?></td>
			<td><?php print($gebruiker->getWachtwoord()); ?></td>
		</tr>

	<?php
	}
	
	?>
	</table>



