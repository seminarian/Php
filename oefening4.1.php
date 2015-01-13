<?php
class test {
	public function honderdGetallen() {
		$tabel=array();
		for ($teller=0;$teller<50;$teller++) {
			$tabel[$teller]=rand(-50,50);
		}
	return $tabel;
	}
}





?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening4.1</title>
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




