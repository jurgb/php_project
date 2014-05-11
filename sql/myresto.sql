-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 11 mei 2014 om 00:50
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
-- Tabelstructuur voor tabel `tbl_gerechten`
--

CREATE TABLE IF NOT EXISTS `tbl_gerechten` (
  `gerecht_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `gerechtnaam` varchar(250) NOT NULL,
  `gerechtprijs` decimal(5,2) NOT NULL,
  `gerechttype` varchar(250) NOT NULL,
  PRIMARY KEY (`gerecht_id`),
  KEY `restaurant_id` (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_gerechten`
--

INSERT INTO `tbl_gerechten` (`gerecht_id`, `restaurant_id`, `gerechtnaam`, `gerechtprijs`, `gerechttype`) VALUES
(27, 26, 'qsd', '0.00', 'qsd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_openingsuren`
--

CREATE TABLE IF NOT EXISTS `tbl_openingsuren` (
  `openingsuren_id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) NOT NULL,
  `maandag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `maandag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `maandag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `maandag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `dinsdag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `dinsdag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `dinsdag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `dinsdag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `woensdag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `woensdag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `woensdag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `woensdag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `donderdag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `donderdag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `donderdag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `donderdag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `vrijdag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `vrijdag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `vrijdag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `vrijdag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `zaterdag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `zaterdag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `zaterdag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `zaterdag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  `zondag_opening_ochtend` time NOT NULL DEFAULT '11:00:00',
  `zondag_sluiting_ochtend` time NOT NULL DEFAULT '14:00:00',
  `zondag_opening_avond` time NOT NULL DEFAULT '17:00:00',
  `zondag_sluiting_avond` time NOT NULL DEFAULT '23:00:00',
  PRIMARY KEY (`openingsuren_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_openingsuren`
--

INSERT INTO `tbl_openingsuren` (`openingsuren_id`, `restaurant_id`, `maandag_opening_ochtend`, `maandag_sluiting_ochtend`, `maandag_opening_avond`, `maandag_sluiting_avond`, `dinsdag_opening_ochtend`, `dinsdag_sluiting_ochtend`, `dinsdag_opening_avond`, `dinsdag_sluiting_avond`, `woensdag_opening_ochtend`, `woensdag_sluiting_ochtend`, `woensdag_opening_avond`, `woensdag_sluiting_avond`, `donderdag_opening_ochtend`, `donderdag_sluiting_ochtend`, `donderdag_opening_avond`, `donderdag_sluiting_avond`, `vrijdag_opening_ochtend`, `vrijdag_sluiting_ochtend`, `vrijdag_opening_avond`, `vrijdag_sluiting_avond`, `zaterdag_opening_ochtend`, `zaterdag_sluiting_ochtend`, `zaterdag_opening_avond`, `zaterdag_sluiting_avond`, `zondag_opening_ochtend`, `zondag_sluiting_ochtend`, `zondag_opening_avond`, `zondag_sluiting_avond`) VALUES
(29, 30, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(30, 30, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(31, 30, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(32, 32, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

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
  `tafel_id` int(11) NOT NULL,
  PRIMARY KEY (`reservatieid`),
  KEY `tafelnr` (`tafel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_restaurants`
--

INSERT INTO `tbl_restaurants` (`restaurant_id`, `user_id`, `restaurantnaam`, `beschrijving`, `adres`, `postcode`, `gemeente`, `telefoonnr`) VALUES
(26, 37, 'IMD kingsqsd', 'IMD KING is een hamburger restaurant in Mechelen waar je kan genieten van verschillende specialiteiten!', 'Lange ridderstraat 44', 3000, 'Mechelen', '78465123'),
(27, 37, 'qsdqsdqsd', 'sqdqsdqsd', 'qsdqsd', 2000, 'qsdqsdqsd', '78645312'),
(28, 37, 'azertu', 'azdazd', 'azdazd', 205, 'azda', '8465231'),
(29, 40, 'azerty', 'azerty', 'azerty', 3000, 'azerty', '0456485'),
(30, 41, 'azertyuiyuoi', 'qscdvf', 'qzdsefdghjkl', 1500, 'asqdzfkjl', '42'),
(31, 41, 'azertyh', 'fdsfs', 'qsdfgh', 24, 'qsdsq', '774553'),
(32, 44, 'qsdqsdqsd', 'sqsdqsd', '3500', 2500, 'qsdqsdqs', '78465123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbl_tafels`
--

CREATE TABLE IF NOT EXISTS `tbl_tafels` (
  `tafel_id` int(11) NOT NULL AUTO_INCREMENT,
  `tafelnr` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `aantalpersonen` varchar(250) NOT NULL,
  PRIMARY KEY (`tafel_id`),
  KEY `restaurant_id` (`restaurant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_tafels`
--

INSERT INTO `tbl_tafels` (`tafel_id`, `tafelnr`, `restaurant_id`, `aantalpersonen`) VALUES
(6, 5, 26, '4');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Gegevens worden uitgevoerd voor tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `naam`, `voornaam`, `email`, `wachtwoord`) VALUES
(37, 'test', 'test', 'test@test.com', '408f505cff4359a360906d155fdd4bb0'),
(38, 'jeroen', 'jeroen', 'jeroen.dom@gmail.com', '957fe18fb97c7a81281f4414978c6dcf'),
(39, 'qsd', 'qsd', 'test@test.com', '408f505cff4359a360906d155fdd4bb0'),
(40, 'azerty', 'azerty', 'azerty@azerty.be', '5500906c4e3bdb481762ac8abd824327'),
(41, 'azeaetryui', 'qsdfm%Â£', 'test@test.com', '5500906c4e3bdb481762ac8abd824327'),
(42, 'azerty', 'azertya', 'AZEAZEa@QSD', '5500906c4e3bdb481762ac8abd824327'),
(43, 'zdefrt', 'zdefrgthy', 'AZEAZEa@QSD', '5500906c4e3bdb481762ac8abd824327'),
(44, 'azerty', 'azerty', 'azerty@tester.be', '5500906c4e3bdb481762ac8abd824327');

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
  ADD CONSTRAINT `tbl_reservaties_ibfk_1` FOREIGN KEY (`tafel_id`) REFERENCES `tbl_tafels` (`tafel_id`) ON UPDATE CASCADE;

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
