<?php
	class persoon {
		private $voornaam;
		private $familienaam;
		public function __construct($familienaam,$voornaam){
			$this->voornaam=$voornaam;
			$this->familienaam=$familienaam;
		}
		public function getVollNaam() {
			$volledigeNaam=$this->familienaam.", ".$this->voornaam;
			return $volledigeNaam;
		}
		public function setFamilienaam($familienaam) {
			$this->familienaam=$familienaam;
		}
				public function setVoornaam($voornaam) {
			$this->voornaam=$voornaam;
		}
	}
	class medewerker extends persoon {
		private $aantalCursisten;
		public function __construct($familienaam,$voornaam,$aantalCursisten) {
			parent::__construct($familienaam,$voornaam);
			$this->aantalCursisten=$aantalCursisten;
		}
		public function getAantalCursisten() {
		return $this->aantalCursisten;
		}
	}
	class cursist extends persoon {
		private $aantalCursussen;
		public function __construct($familienaam,$voornaam,$aantalCursussen) {
			parent::__construct($familienaam,$voornaam);
			$this->aantalCursussen=$aantalCursussen;
		}
		public function getAantalCursussen() {
		return $this->aantalCursussen;
		}
	}
	$cursist = new  Cursist("Peeters", "Jan", 3);
	$medewerker = new Medewerker("Janssens", "Tom", 8);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 8.5</title>
</head>
<body>
	<h1>Namen</h1>
		<ul>
			<li><?php print($cursist->getVollNaam() . " volgt " . $cursist->getAantalCursussen() . " cursus(sen)");?></li>
			<li><?php print($medewerker->getVollNaam() . " begeleidt " . $medewerker->getAantalCursisten() . " cursist(en)");?></li>
		</ul>			
</body>
</html>




