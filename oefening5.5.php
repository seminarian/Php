<?php
if(!empty($_POST["kleur"])) {
	$kleur=$_POST["kleur"];
	setcookie("kleur",$kleur,time() + 10);
} elseif (!isset($_COOKIE["kleur"])) {
	$kleur="wit";
} else {
	$kleur=$_COOKIE["kleur"];
}



?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 5.5 </title>
	<style type="text/css">
		body {
			background-color:
			<?php
			SWITCH ($kleur) {
			case "rood":
			print("red");
			break;
			case "blauw":
			print("blue");
			break;
			case "groen":
			print("green");
			break;
			case "geel":
			print("yellow");
			break;
			case "wit":
			print("white");
			break;
		}
			?>;
		}
	</style>
</head>
<body>
Kies uw favoriete achtergrondkleur: <form action="oefening5.5.php" method="post">
<select name="kleur">
  <option value="rood">Rood</option>
  <option value="blauw">Blauw</option>
  <option value="groen">Groen</option>
  <option value="geel">Geel</option>
  <option value="wit">Wit</option>
</select> 
<input type="submit" value="OK">
<a href="oefening5.5.php">Pagina vernieuwen</a>
</form>
</body>
</html>




