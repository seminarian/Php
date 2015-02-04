<h1>Verwijder een exemplaar</h1>
<form action="deleteexemplaar.php" method="get" >
	<label>Kies een te verwijderen exemplaar</label>
	<select name="id">
	<?php
	foreach ($exemplarenLijst as $exemplaar) {
	?>
	<option value="<?php print($exemplaar->getId()); ?>"> <?php $film=FilmService::getFilmById($exemplaar->getFilmId());print($exemplaar->getId() . " " . $film->getTitel()); ?></option>
	<?php
	}
	?>
	</select>
	<input value="verwijder" type="submit">
	<input type="text" value="deleteexemplaar" name="action" hidden="hidden">
</form>	