<?php
	class Film {
		private $id;
		private $titel;
		private $afbeelding;

		//getters en setters in DAO GetbyID
		public function __construct($id,$titel,$afbeelding)  {
			$this->id = $id;
			$this->titel = $titel;
			$this->afbeelding = $afbeelding;
		}

		public function getId() {
			return $this->id;
		}
		public function getTitel() {
			return $this->titel;
		}
		public function getAfbeelding() {
			return $this->afbeelding;
		}
		public function setId($id) {
			$this->id = $id;
		}
		public function setTitel($titel) {
			$this->titel = $titel;
		}
		public function setAfbeelding($afbeelding) {
			$this->afbeelding = $afbeelding;
		}
	}
?>