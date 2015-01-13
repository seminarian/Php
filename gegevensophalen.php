<?php
class PersonenLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","");
		$resultset=$dbh->query("select familienaam,voornaam from personen");
		foreach ($resultset as $rij) {
			$naam=$rij["familienaam"] . ", " . $rij["voornaam"];
			array_push($lijst, $naam);
		}
		$dbh=null;
		return $lijst;
		
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Databanken introductie</title>
</head>
<body>
	<?php
	$pl = new PersonenLijst();
	$tab=$pl->getLijst();
	?>
	<ul>
		<?php
		sort($tab);
		foreach ($tab as $naam) {
			print("<li>" . $naam . "</li>");
		}
		?>
	</ul>
</body>
</html>




