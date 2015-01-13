<?php
class IngredientenArrayGenerator {
	public function getIngredienten() {
		$ing = array();
		array_push($ing, "bloem");
		array_push($ing, "zout");
		array_push($ing, "suiker");
		array_push($ing, "gist");
		array_push($ing, "water");
		return $ing;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Arrays invullen</title>
</head>
<body>
	<h1>
	<?php
		$ingredienten= new IngredientenArrayGenerator();
		print_r($ingredienten->getIngredienten());





	?>




	</h1>
</body>
</html>




