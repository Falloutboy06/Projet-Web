-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 fév. 2019 à 07:25
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `idfestival` int(11) NOT NULL AUTO_INCREMENT,
  `idcrea` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `festival` varchar(255) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`idfestival`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`idfestival`, `idcrea`, `titre`, `festival`, `datedebut`, `datefin`, `info`) VALUES
(1, 3, 'Voyage Sylak 2019', 'Sylak Open Air 2019', '2019-08-02', '2019-08-04', 'Voyage au Sylak Open Air 2019 à St Maurice de Gourdan(01) au départ de Paris, 3 places disponibles, voyage en voiture, participation financière de 15 euros pour l\'essence '),
(2, 1, 'Ragnarok', 'Ragnarok Festival', '2018-12-19', '2018-12-22', 'Gros fest');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userID`, `name`, `password`, `age`, `mail`) VALUES
(1, 'guillaume', 'azerty', 21, 'guillaume.subrini@gmail.com'),
(3, 'Michel', 'Marcel', 54, 'marcel.marcel@marcel.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
