<h1>Voer een nieuw exemplaar in</h1>
<form method="post" action="invoerexemplaar.php?action=invoerexemplaar">
	<label>Kies een titel</label>
	<select name="filmID">
	<?php
	foreach ($filmLijst as $film) {
	?>
	<option value="<?php print($film->getId()); ?>"><?php print($film->getTitel()); ?></option>
	<?php
	}
	?>
	</select>

	<label>Geef een exemplaarnummer</label><input type="text" name="exemplaarID">
	<input type="submit">
</form>	