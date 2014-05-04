-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 04 mei 2014 om 23:08
-- Serverversie: 5.5.27
-- PHP-versie: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `myresto`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_gerechten`
--

CREATE TABLE IF NOT EXISTS `tbl_gerechten` (
  `gerecht_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `gerechtnaam` varchar(250) NOT NULL,
  `gerechtprijs` varchar(250) NOT NULL,
  `gerechttype` varchar(250) NOT NULL,
  PRIMARY KEY (`gerecht_id`),
  KEY `restaurant_id` (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_reservaties`
--

CREATE TABLE IF NOT EXISTS `tbl_reservaties` (
  `reservatieid` int(11) NOT NULL AUTO_INCREMENT,
  `klantnaam` varchar(250) NOT NULL,
  `aantalpersonen` int(11) NOT NULL,
  `datum` date NOT NULL,
  `uur` time NOT NULL,
  `tafelnr` int(11) NOT NULL,
  PRIMARY KEY (`reservatieid`),
  KEY `tafelnr` (`tafelnr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_restaurants`
--

CREATE TABLE IF NOT EXISTS `tbl_restaurants` (
  `restaurant_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `restaurantnaam` varchar(250) NOT NULL,
  `beschrijving` varchar(400) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `postcode` int(10) NOT NULL,
  `gemeente` varchar(250) NOT NULL,
  `telefoonnr` varchar(30) NOT NULL,
  PRIMARY KEY (`restaurant_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tafels`
--

CREATE TABLE IF NOT EXISTS `tbl_tafels` (
  `tafelnr` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `aantalpersonen` varchar(250) NOT NULL,
  PRIMARY KEY (`tafelnr`),
  KEY `restaurant_id` (`restaurant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(250) NOT NULL,
  `voornaam` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `wachtwoord` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `tbl_gerechten`
--
ALTER TABLE `tbl_gerechten`
  ADD CONSTRAINT `tbl_gerechten_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `tbl_reservaties`
--
ALTER TABLE `tbl_reservaties`
  ADD CONSTRAINT `tbl_reservaties_ibfk_1` FOREIGN KEY (`tafelnr`) REFERENCES `tbl_tafels` (`tafelnr`) ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `tbl_restaurants`
--
ALTER TABLE `tbl_restaurants`
  ADD CONSTRAINT `tbl_restaurants_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `tbl_tafels`
--
ALTER TABLE `tbl_tafels`
  ADD CONSTRAINT `tbl_tafels_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
