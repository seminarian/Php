<?php
class thermometer {
	private $temperatuur;
		public function setTemp($graden) {
		$this->temperatuur=$graden;
	}
	public function verhoogTemp($graden) {
		$this->temperatuur+=$graden;
	}
		public function verlaagTemp($graden) {
		$this->temperatuur-=$graden;
	}
	public function getTemp() {
		return $this->temperatuur;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening8.1</title>
</head>
<body>
	<h1> 
	<?php 
	$thermo = new thermometer();
	// $thermo->setTemp(5);
	print("temperatuur is".$thermo->getTemp());
	$thermo->verhoogTemp(10);
	print("temperatuur is".$thermo->getTemp());
?>


	</h1>
</body>
</html>




