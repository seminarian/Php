<?php
class test {
	public function dertigFibonnacci() {
		$tab = array();
		$tab[0] = 0;
		$tab[1] = 1;
		for ($i = 2; $i < 50; $i++) {
			$tab[$i] = $tab[$i-1] + $tab[$i-2];
		}
		return $tab;
	}
}





?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening4.3</title>
</head>
<body>
	<h1>
		<?php

		$object=new test();
		print_r($object->dertigFibonnacci());






		?>
	</h1>
</body>
</html>




