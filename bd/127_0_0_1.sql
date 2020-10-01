-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 13 juin 2018 à 21:17
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdpro`
--
CREATE DATABASE IF NOT EXISTS `bdpro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdpro`;

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

DROP TABLE IF EXISTS `aeroport`;
CREATE TABLE IF NOT EXISTS `aeroport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idairport` char(3) NOT NULL,
  `nomairport` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aeroport`
--

INSERT INTO `aeroport` (`id`, `idairport`, `nomairport`) VALUES
(1, 'AUH', 'Abu Dhabi '),
(2, 'ABJ', 'Abidjan '),
(3, 'ALG', 'Alger '),
(4, 'TXL', 'Berlin '),
(5, 'ALG', 'Alger '),
(6, 'ALG', 'Alger '),
(7, 'TXL', 'Berlin '),
(8, 'ALG', 'Alger '),
(9, 'TXL', 'Berlin '),
(10, 'ALG', 'Alger '),
(11, 'TXL', 'Berlin '),
(12, 'ALG', 'Alger '),
(13, 'TXL', 'Berlin '),
(14, 'ALG', 'Alger '),
(15, 'TXL', 'Berlin '),
(16, 'ALG', 'Alger '),
(17, 'TXL', 'Berlin '),
(18, 'ALG', 'Alger '),
(19, 'TXL', 'Berlin '),
(20, 'ALG', 'Alger '),
(21, 'TXL', 'Berlin '),
(22, 'GVA', 'Genève '),
(23, 'FCO', 'Rome '),
(24, 'ABJ', 'Abidjan '),
(25, 'AUH', 'Abu Dhabi '),
(26, 'ABJ', 'Abidjan '),
(27, 'AUH', 'Abu Dhabi '),
(28, 'LHR', 'Londres-Heathrow '),
(29, 'MAD', 'Madrid '),
(30, 'CPH', 'Copenhague '),
(31, 'GVA', 'Genève '),
(32, 'TXL', 'Berlin '),
(33, 'DOH', 'Doha '),
(34, 'TXL', 'Berlin '),
(35, 'DOH', 'Doha '),
(36, 'TXL', 'Berlin '),
(37, 'DOH', 'Doha '),
(38, 'TXL', 'Berlin '),
(39, 'DOH', 'Doha '),
(40, 'TXL', 'Berlin '),
(41, 'DOH', 'Doha '),
(42, 'TXL', 'Berlin '),
(43, 'DOH', 'Doha '),
(44, 'MAD', 'Madrid '),
(45, 'ORY', 'Paris-Orly '),
(46, 'MAD', 'Madrid '),
(47, 'ORY', 'Paris-Orly '),
(48, 'ABJ', 'Abidjan '),
(49, 'ALG', 'Alger ');

-- --------------------------------------------------------

--
-- Structure de la table `arrivee`
--

DROP TABLE IF EXISTS `arrivee`;
CREATE TABLE IF NOT EXISTS `arrivee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numvol` int(11) NOT NULL,
  `idairport` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `arrivee`
--

INSERT INTO `arrivee` (`id`, `numvol`, `idairport`) VALUES
(1, 1234, 'AUH'),
(2, 1234, 'TXL'),
(3, 1234, 'TXL'),
(4, 1234, 'TXL'),
(5, 1234, 'TXL'),
(6, 1234, 'TXL'),
(7, 1234, 'TXL'),
(8, 1234, 'TXL'),
(9, 1234, 'TXL'),
(10, 1234, 'FCO'),
(11, 1234, 'AUH'),
(12, 1234, 'AUH'),
(13, 4564, 'MAD'),
(14, 4564, 'GVA'),
(15, 4564, 'DOH'),
(16, 4564, 'DOH'),
(17, 4564, 'DOH'),
(18, 4564, 'DOH'),
(19, 4564, 'DOH'),
(20, 4564, 'DOH'),
(21, 2222, 'ORY'),
(22, 2222, 'ORY'),
(23, 2223, 'ALG');

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

DROP TABLE IF EXISTS `avion`;
CREATE TABLE IF NOT EXISTS `avion` (
  `numav` varchar(20) NOT NULL,
  `noma` varchar(50) NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY (`numav`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`numav`, `noma`, `capacite`) VALUES
('A320', 'AIRBUSA320', 320),
('A380', 'AIRBUSA380', 380),
('BO707', 'BOEING707', 250);

-- --------------------------------------------------------

--
-- Structure de la table `avoir_lieu`
--

DROP TABLE IF EXISTS `avoir_lieu`;
CREATE TABLE IF NOT EXISTS `avoir_lieu` (
  `idairport` varchar(3) NOT NULL,
  `idescale` varchar(3) NOT NULL,
  PRIMARY KEY (`idescale`,`idairport`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `choisir_siege`
--

DROP TABLE IF EXISTS `choisir_siege`;
CREATE TABLE IF NOT EXISTS `choisir_siege` (
  `iduser` int(11) NOT NULL,
  `numreserv` int(11) NOT NULL,
  `numsiege` int(11) NOT NULL,
  PRIMARY KEY (`iduser`,`numreserv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `choisir_siege`
--

INSERT INTO `choisir_siege` (`iduser`, `numreserv`, `numsiege`) VALUES
(7, 7, 12),
(11, 8, 1),
(12, 6, 1),
(6, 4, 12),
(11, 4, 1),
(12, 9, 23),
(20, 8, 1),
(21, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `concerner`
--

DROP TABLE IF EXISTS `concerner`;
CREATE TABLE IF NOT EXISTS `concerner` (
  `numreserv` int(11) NOT NULL,
  `numvol` int(11) NOT NULL,
  PRIMARY KEY (`numreserv`,`numvol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `depart`
--

DROP TABLE IF EXISTS `depart`;
CREATE TABLE IF NOT EXISTS `depart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numvol` int(11) NOT NULL,
  `idairport` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `depart`
--

INSERT INTO `depart` (`id`, `numvol`, `idairport`) VALUES
(1, 1234, 'ABJ'),
(2, 1234, 'ALG'),
(3, 1234, 'ALG'),
(4, 1234, 'ALG'),
(5, 1234, 'ALG'),
(6, 1234, 'ALG'),
(7, 1234, 'ALG'),
(8, 1234, 'ALG'),
(9, 1234, 'ALG'),
(10, 1234, 'ALG'),
(11, 1234, 'GVA'),
(12, 1234, 'ABJ'),
(13, 1234, 'ABJ'),
(14, 4564, 'LHR'),
(15, 4564, 'CPH'),
(16, 4564, 'TXL'),
(17, 4564, 'TXL'),
(18, 4564, 'TXL'),
(19, 4564, 'TXL'),
(20, 4564, 'TXL'),
(21, 4564, 'TXL'),
(22, 2222, 'MAD'),
(23, 2222, 'MAD'),
(24, 2223, 'ABJ');

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

DROP TABLE IF EXISTS `effectuer`;
CREATE TABLE IF NOT EXISTS `effectuer` (
  `iduser` int(11) NOT NULL,
  `numreserv` int(11) NOT NULL,
  PRIMARY KEY (`iduser`,`numreserv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `escale`
--

DROP TABLE IF EXISTS `escale`;
CREATE TABLE IF NOT EXISTS `escale` (
  `id_escale` int(11) NOT NULL,
  `heurearrivee` date NOT NULL,
  `heuredepart` date NOT NULL,
  PRIMARY KEY (`id_escale`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `numav` varchar(10) NOT NULL,
  `numvol` int(11) NOT NULL,
  PRIMARY KEY (`numav`,`numvol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`numav`, `numvol`) VALUES
('A380', 222),
('A380', 4575),
('B0707', 5778),
('BO780', 2222),
('BO780', 2223);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `numreserv` varchar(10) NOT NULL,
  `nbplace` int(11) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `etat_reserv` varchar(50) NOT NULL DEFAULT 'CONFIRMED',
  PRIMARY KEY (`numreserv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`numreserv`, `nbplace`, `classe`, `etat_reserv`) VALUES
('9563458956', 1, 'Economique', 'CONFIRMED'),
('7596193155', 1, 'Economique', 'CONFIRMED'),
('8346142448', 1, 'Business', 'CONFIRMED'),
('6663237752', 1, 'Economique', 'CONFIRMED'),
('3141831197', 1, 'Economique', 'CONFIRMED'),
('4992545995', 1, 'Business', 'CONFIRMED'),
('4869715777', 1, 'Business	', 'CONFIRMED'),
('6564776285', 1, 'Economique', 'CONFIRMED'),
('9364255628', 1, 'Business', 'CONFIRMED'),
('8541237669', 2, 'Economique', 'CONFIRMED');

-- --------------------------------------------------------

--
-- Structure de la table `siege`
--

DROP TABLE IF EXISTS `siege`;
CREATE TABLE IF NOT EXISTS `siege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numsiege` int(11) NOT NULL,
  `rangee` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `siege`
--

INSERT INTO `siege` (`id`, `numsiege`, `rangee`) VALUES
(2, 12, 'A'),
(3, 1, 'B'),
(4, 1, 'A'),
(5, 12, 'C'),
(6, 1, 'A'),
(7, 1, 'A'),
(8, 1, 'A'),
(9, 1, 'A'),
(10, 23, 'A'),
(11, 1, 'A'),
(12, 3, 'A');

-- --------------------------------------------------------

--
-- Structure de la table `situer`
--

DROP TABLE IF EXISTS `situer`;
CREATE TABLE IF NOT EXISTS `situer` (
  `idville` varchar(3) NOT NULL,
  `idairport` varchar(3) NOT NULL,
  PRIMARY KEY (`idville`,`idairport`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numpassport` varchar(20) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `civilite` varchar(3) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `numpassport`, `nom`, `prenom`, `civilite`, `email`, `tel`) VALUES
(6, 'ER4R12', 'ASDB', 'ert', 'Mr', 'aain.yves10@gmail.com', '213562018341'),
(7, 'dfgsg12', 'ASDB', 'ert', 'Mr', 'aain@xyz', '+21345355435'),
(8, 'dfgsg12', 'ASDB', 'ert', 'Mr', 'aain@xyz', '+21345355435'),
(9, 'dfgsg12', 'ASDB', 'ert', 'Mr', 'aain@xyz', '+21345355435'),
(10, 'dfgsg12', 'ASDB', 'ert', 'Mr', 'aain@xyz', '+21345355435'),
(11, '12ERFG54TR', 'PLuto', 'COOlu', 'Mr', 'plut.coolu@gmail.com', '0456789214'),
(12, '14AF4326', 'test', 'test', 'Mr', 'zaib12@gmail.com', '+2135612784'),
(13, '', '', '', '', '', ''),
(14, 'ER4R12', 'ASDB', 'GILL', 'Mr', 'efrd@gmail.com', '213562018341'),
(15, '12ERFG54TR', 'MOI', 'GILL', 'Mr', 'aain@xyz', '+213561205112'),
(16, '14AF4326', 'test', 'test', 'Mr', 'manueloverdose@gmail.com', '+2135612784'),
(17, '14AF4326', 'test', 'test', 'Mr', 'manueloverdose@gmail.com', '+2135612784'),
(18, '14AF4326', 'test', 'test', 'Mr', 'manueloverdose@gmail.com', '+2135612784'),
(19, '14AF4326', 'test', 'TEsT23', 'Mr', 'manueloverdose@gmail.com', '+2135612784'),
(20, '12AZE54Y', 'test', 'TEsTFDG', 'Mr', 'manueloverdose@gmail.com', '+2135612784'),
(21, '1233ERGH', 'ERRT', 'YTUO', 'Mr', 'manueloverdose@gmail.com', '+2135612784');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idville` varchar(3) NOT NULL,
  `nomville` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `idville`, `nomville`) VALUES
(1, 'ALG', 'Alger '),
(2, 'ALG', 'Alger '),
(3, 'ALG', 'Alger '),
(4, 'TXL', 'Berlin '),
(5, 'ALG', 'Alger '),
(6, 'TXL', 'Berlin '),
(7, 'ALG', 'Alger '),
(8, 'TXL', 'Berlin '),
(9, 'ALG', 'Alger '),
(10, 'TXL', 'Berlin '),
(11, 'ALG', 'Alger '),
(12, 'TXL', 'Berlin '),
(13, 'ALG', 'Alger '),
(14, 'TXL', 'Berlin '),
(15, 'ALG', 'Alger '),
(16, 'TXL', 'Berlin '),
(17, 'ALG', 'Alger '),
(18, 'TXL', 'Berlin '),
(19, 'GVA', 'Genève '),
(20, 'FCO', 'Rome '),
(21, 'ABJ', 'Abidjan '),
(22, 'AUH', 'Abu Dhabi '),
(23, 'ABJ', 'Abidjan '),
(24, 'AUH', 'Abu Dhabi '),
(25, 'LHR', 'Londres-Heathrow '),
(26, 'MAD', 'Madrid '),
(27, 'CPH', 'Copenhague '),
(28, 'GVA', 'Genève '),
(29, 'TXL', 'Berlin '),
(30, 'DOH', 'Doha '),
(31, 'TXL', 'Berlin '),
(32, 'DOH', 'Doha '),
(33, 'TXL', 'Berlin '),
(34, 'DOH', 'Doha '),
(35, 'TXL', 'Berlin '),
(36, 'DOH', 'Doha '),
(37, 'TXL', 'Berlin '),
(38, 'DOH', 'Doha '),
(39, 'TXL', 'Berlin '),
(40, 'DOH', 'Doha '),
(41, 'MAD', 'Madrid '),
(42, 'ORY', 'Paris-Orly '),
(43, 'MAD', 'Madrid '),
(44, 'ORY', 'Paris-Orly '),
(45, 'ABJ', 'Abidjan '),
(46, 'ALG', 'Alger ');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `numvol` int(11) NOT NULL,
  `datedepart` date NOT NULL,
  `datearrivee` date NOT NULL,
  `heuredepart` time NOT NULL,
  `heurearrivee` time NOT NULL,
  `prix` double NOT NULL,
  PRIMARY KEY (`numvol`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`numvol`, `datedepart`, `datearrivee`, `heuredepart`, `heurearrivee`, `prix`) VALUES
(1234, '2018-05-08', '2018-05-24', '07:35:00', '12:20:00', 54500),
(4564, '2018-05-16', '2018-05-17', '20:30:00', '06:00:00', 45000),
(2222, '2018-06-06', '2018-06-07', '20:10:00', '03:00:00', 36000),
(2223, '2018-06-06', '2018-06-07', '01:10:00', '07:00:00', 36000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
