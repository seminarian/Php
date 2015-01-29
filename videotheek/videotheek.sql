-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 29 jan 2015 om 15:11
-- Serverversie: 5.6.11
-- PHP-versie: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `videotheek`
--
CREATE DATABASE IF NOT EXISTS `videotheek` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `videotheek`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `exemplaren`
--

CREATE TABLE IF NOT EXISTS `exemplaren` (
  `exemplaarID` int(11) NOT NULL AUTO_INCREMENT,
  `filmID` int(11) NOT NULL,
  `uitgeleend` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`exemplaarID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `exemplaren`
--

INSERT INTO `exemplaren` (`exemplaarID`, `filmID`, `uitgeleend`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 2, 0),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `filmID` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(250) NOT NULL,
  `afbeelding` varchar(250) NOT NULL,
  PRIMARY KEY (`filmID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `films`
--

INSERT INTO `films` (`filmID`, `titel`, `afbeelding`) VALUES
(1, 'Tomb Raider', 'tombraider.jpg'),
(2, 'The Peacemaker', 'thepeacemaker.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `gebruikersID` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  PRIMARY KEY (`gebruikersID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikersID`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'admin', 'admin'),
(2, 'gebruiker', 'gebruiker');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE IF NOT EXISTS `klanten` (
  `klantID` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `adres` varchar(200) NOT NULL,
  `postcode` int(11) NOT NULL,
  `plaats` varchar(50) NOT NULL,
  `telefoonnummer` varchar(50) NOT NULL,
  `emailadres` varchar(100) NOT NULL,
  PRIMARY KEY (`klantID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantID`, `voornaam`, `achternaam`, `adres`, `postcode`, `plaats`, `telefoonnummer`, `emailadres`) VALUES
(1, 'Pieter', 'Doms', 'Doornhoek 4', 8470, 'Gistel', '0496665385', 'pdoms@telenet.be'),
(2, 'Lynn', 'Geerinck', 'Doornhoek 4', 8470, 'Gistel', '0495107908', 'lynn_geerinck89@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `uitleningen`
--

CREATE TABLE IF NOT EXISTS `uitleningen` (
  `uitleenID` int(11) NOT NULL AUTO_INCREMENT,
  `klantID` int(11) NOT NULL,
  `exemplaarID` int(11) NOT NULL,
  `datumuitlening` date NOT NULL,
  `periode` int(11) NOT NULL,
  `teruggebracht` tinyint(1) NOT NULL DEFAULT '0',
  `datumretour` date DEFAULT NULL,
  PRIMARY KEY (`uitleenID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `uitleningen`
--

INSERT INTO `uitleningen` (`uitleenID`, `klantID`, `exemplaarID`, `datumuitlening`, `periode`, `teruggebracht`, `datumretour`) VALUES
(1, 2, 3, '2015-01-29', 5, 0, NULL),
(4, 1, 1, '2015-01-29', 10, 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
