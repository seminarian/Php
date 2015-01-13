<?php 

class zoeken {
	public function getResult() {
		$minimumprijs=$_GET["minimum"];
		$maximumprijs=$_GET["maximum"];
		print("minimum: ".$minimumprijs);
print("maximum: ".$maximumprijs);
		$lijst=array();
//		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql="select naam,prijs from modules WHERE prijs >=".$minimumprijs." and prijs <=" .$maximumprijs . " order by prijs";
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$resultset=$dbh->query($sql);
		foreach ($resultset as $rij) {
			print_r($rij);
			$module = $rij["naam"] . " (" . $rij["prijs"] . " euro)";
			array_push($lijst, $module);
		}
		$dbh = null;
		return $lijst;
	}
}



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 9.1-2</title>
</head>
<body>
	<h1>Zoekresultaat</h1>
	<ul>
		<?php
		$object= new zoeken();
		$tab=$object->getResult();
		foreach ($tab as $result) {
			print("<li>".$result."</li>");

		}

		?>
		<ul>




		</ul>
	</body>
	</html>




