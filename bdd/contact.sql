-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 10 Avril 2017 à 17:18
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ma2sage`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Civilite` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Societe` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Adresse` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Codepostal` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Ville` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Mail` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Telephone` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Objet` varchar(254) CHARACTER SET utf8 NOT NULL,
  `Message` text CHARACTER SET utf8 NOT NULL,
  `Nom` varchar(254) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`Civilite`, `Prenom`, `Societe`, `Adresse`, `Codepostal`, `Ville`, `Mail`, `Telephone`, `Objet`, `Message`, `Nom`) VALUES
('Homme', 'Benjamin', 'Apple', 'anywhere', '19632', 'Ukla', 'benjamin.durand@gmail.com', '0812764932', 'Candidature', ' J aimerais faire partie de votre Ã©quipe.', 'Durand'),
('Homme', 'Henry', 'Altice', 'Rue du paradis', '12345', 'Atlantide', 'henry@gmail.fr', '0619473615', 'Partenriat', ' Je vous propose de faire un partenariat avec moi.', 'Bernard'),
('Homme', 'Henry', 'Altice', 'Rue du paradis', '12345', 'Atlantide', 'henry@gmail.fr', '0619473615', 'Partenriat', ' Je vous propose de faire un partenariat avec moi.', 'Bernard');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
