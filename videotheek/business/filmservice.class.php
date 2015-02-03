<?php
require_once("data/filmDAO.class.php");
class FilmService {
	public function getFilms(){
		$lijst = FilmDAO::getAllFilms();
		return $lijst;
	}
	public function getFilmByTitel($titel){
		$lijst = FilmDAO::getByTitel($titel);
		return $lijst;
	}
	public function getFilmById($id){
		$lijst = FilmDAO::getByTitel($id);
		return $lijst;
	}
	public function getFilmsByNummer($nummer) {
		$lijst = FilmDAO::getFilmsByNummer($nummer);
		return $lijst;
	}
	public function addFilm($titel,$afbeelding) {
		FilmDAO::addFilm($titel,$afbeelding);
	}
}



?>