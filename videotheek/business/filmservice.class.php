<?php
require_once("data/filmDAO.class.php");
class FilmService {
	public function getFilms(){
		$lijst = FilmDAO::getAllFilms();
		return $lijst;
	}
}



?>