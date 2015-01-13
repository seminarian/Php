<?php
	class medewerker {
		private $voornaam;
		private $familienaam;
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
	class cursist extends medewerker {

	}

	$cursist = new  Cursist();
	$medewerker = new Medewerker();
	$cursist->setFamilienaam("Peeters");
	$cursist->setVoornaam("Jan");
	$medewerker->setFamilienaam("Janssens");
	$medewerker->setVoornaam("Tom");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Oefening 8.4</title>
</head>
<body>
	<h1>Namen</h1>
		<ul>
			<li><?php print($cursist->getVollNaam());?></li>
			<li><?php print($medewerker->getVollNaam());?></li>
		</ul>			
</body>
</html>




