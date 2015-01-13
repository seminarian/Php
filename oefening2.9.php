<?php
class detector {
	public function detectieGetal($getal) {
		switch($getal) {
			case 1:
			print ("een");
			break;
			case 2:
			print ("twee");
			break;
			case 3:
			print ("drie");
			break;
			case 4:
			print ("vier");
			break;
			case 5:
			print ("vijf");
			break;
			default:
			print ($getal);
			break;
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
		<style type="text/css">
			h1 {color:red;}
		</style>
	</head>
	<body>
		<h1>
			<?php
			$rekenmachien = new detector();
			print($rekenmachien->detectieGetal(6));
			?>
		</h1>
	</body>
</html>