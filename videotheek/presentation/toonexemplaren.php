	<h1>Lijst van alle exemplaren</h1>
	<table border="1">
		<tr>
			<th><b>Exemplaarnummer</b></th>
			<th><b>Titel</b></th>
			<th><b>Uitgeleend</b></th>
		</tr>
	<?php
	foreach($exemplarenLijst as $exemplaar) {
	?>
		<tr>
			<td><?php print($exemplaar->getId()); ?></td>
			<td><?php $film = FilmService::getFilmById($exemplaar->getFilmId());
					print($film->getTitel());
				 ?>
			</td>
			<td>
				<?php if($exemplaar->getUitgeleend()) {
						print("Ja");
					} else {
						print("Nee");
					} ?>
			</td>
			<td>
				<a href="deleteexemplaar.php?action=deleteexemplaar&id=<?php print($exemplaar->getId()); ?>">Verwijder</a>
			</td>
		</tr>

	<?php
	}
	
	?>
	</table>
