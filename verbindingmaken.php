<?php
class PersonenLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$dbh = null;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>verbindingmaken</title>
</head>
<body>
	<?php
	$pl = new PersonenLijst();
	$pl->getLijst();
	?>
</body>
</html>




