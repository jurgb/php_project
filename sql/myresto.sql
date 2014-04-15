-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 14 apr 2014 om 21:03
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `gerechtid` int(11) NOT NULL AUTO_INCREMENT,
  `gerechtnaam` varchar(250) NOT NULL,
  `gerechtprijs` varchar(250) NOT NULL,
  `gerechttype` varchar(250) NOT NULL,
  PRIMARY KEY (`gerechtid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservatie`
--

CREATE TABLE IF NOT EXISTS `reservatie` (
  `reservatieid` int(11) NOT NULL AUTO_INCREMENT,
  `klantnaam` varchar(250) NOT NULL,
  `aantalpersonen` int(11) NOT NULL,
  `datum` varchar(250) NOT NULL,
  `uur` varchar(250) NOT NULL,
  `tafelnummer` varchar(250) NOT NULL,
  `duurreservatie` varchar(250) NOT NULL,
  PRIMARY KEY (`reservatieid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurantid` int(11) NOT NULL AUTO_INCREMENT,
  `tafelid` int(11) NOT NULL,
  `reservatieid` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  PRIMARY KEY (`restaurantid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tafelindeling`
--

CREATE TABLE IF NOT EXISTS `tafelindeling` (
  `tafelid` int(11) NOT NULL AUTO_INCREMENT,
  `tafelnummer` varchar(250) NOT NULL,
  `aantalpersonen` varchar(250) NOT NULL,
  PRIMARY KEY (`tafelid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(250) NOT NULL,
  `voornaam` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `wachtwoord` varchar(250) NOT NULL,
  `restaurantnaam` varchar(250) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `postcode` varchar(250) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`gerechtid`) REFERENCES `restaurant` (`restaurantid`);

--
-- Beperkingen voor tabel `reservatie`
--
ALTER TABLE `reservatie`
  ADD CONSTRAINT `reservatie_ibfk_1` FOREIGN KEY (`reservatieid`) REFERENCES `restaurant` (`restaurantid`);

--
-- Beperkingen voor tabel `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`restaurantid`) REFERENCES `tafelindeling` (`tafelid`);

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `restaurant` (`restaurantid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
