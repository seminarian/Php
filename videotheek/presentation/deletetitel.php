<h1>Verwijder een titel</h1>
<form method="GET" action="deletetitel.php?">
	<label>Kies een te verwijderen titel</label>
	<select name="id">
	<?php
	foreach ($filmLijst as $film) {
	?>
	<option value="<?php print($film->getId()); ?>"><?php print($film->getTitel()); ?></option>
	<?php
	}
	?>
	</select>
	<input type="submit">
	<input type="text" name="action" value="deletetitel" hidden="hidden">
</form>	