<h1>Leen film uit</h1>
<form action="leenuit.php?action=leenuit" method="post">
	<label>Exemplaar nummer:</label><input type="text" name="exemplaarnummer">
	<label>Uitlenen aan:</label>
	<select name="klantID">
	<?php
	foreach ($klantenLijst as $klant) {
	?>
	<option value="<?php print($klant->getId()) ?>"> <?php print($klant->getVoornaam() . " " . $klant->getAchternaam()); ?></option>
	<?php }
	?>
	</select>
	<label>Periode:</label><input type="text" name="periode" value="5">
	<input type="submit" value="Leen uit">
</form>