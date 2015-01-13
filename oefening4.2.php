<?php
class test {
	public function honderdGetallen() {
		$tab = array();
		$tab[0] = 0;
		for ($i = 1; $i < 50; $i++) {
			$tab[$i] = $tab[$i-1] + $i;
		}
		return $tab;
	return $tabel;
	}
}





?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening4.2</title>
</head>
<body>
	<h1>
		<?php

		$object=new test();
		print_r($object->honderdGetallen());






		?>
	</h1>
</body>
</html>




