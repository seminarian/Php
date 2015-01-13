<?php
class ModuleLijst {
	public function createModule($naam, $prijs) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "insert into modules (naam,prijs) values ('" .$naam . "', " . $prijs . ")";
		$dbh->exec($sql);
		$laatsteId = $dbh->lastInsertId();
		print($laatsteId);
		$dbh = null;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Modules</title>
</head>
<body>
	<h1>Module toevoegen</h1>
	<?php
	$mlijst = new ModuleLijst();
	$mlijst->createModule("Access", 85.0);
	?>
</body>
</html>




