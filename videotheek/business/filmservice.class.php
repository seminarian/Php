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
		$film = FilmDAO::getById($id);
		return $film;
	}
	public function getFilmsByNummer($nummer) {
		$film = FilmDAO::getFilmsByNummer($nummer);
		return $film;
	}
	public function addFilm($titel,$afbeelding) {
		FilmDAO::addFilm($titel,$afbeelding);
	}
	public function deleteFilm($filmID) {
		FilmDAO::deleteFilm($filmID);
	}
}



?>