-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Avril 2017 à 11:44
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
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `titres` varchar(255) NOT NULL,
  `histoires` text NOT NULL,
  `auteurs` varchar(255) NOT NULL,
  `pictures` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actualites`
--

INSERT INTO `actualites` (`titres`, `histoires`, `auteurs`, `pictures`) VALUES
('Création agence', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ipsam, dolorem ut voluptas molestias, nostrum eaque eligendi repellendus ipsa optio excepturi omnis veniam! Perferendis harum voluptate commodi, sapiente quo consequatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum atque impedit consequatur labore sint necessitatibus ut nobis, maiores minus blanditiis ipsum libero dolor aut possimus, repellendus distinctio harum ratione ducimus.', 'maxime', 'machinenantes.JPG'),
('Stratégie de l\'agence', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium neque quod, excepturi nostrum iusto libero natus error? Rerum eum maxime excepturi corrupti animi, saepe magnam est, sit nam deserunt aspernatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio commodi delectus quam ea, odit modi aliquid sed alias neque perspiciatis eius aspernatur unde at qui error sequi fuga, est architecto.', 'samuel', 'machinenantes.JPG'),
('Emménagement', '>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe temporibus voluptatum provident consequuntur sequi magni totam ex quo, perspiciatis numquam iusto velit porro beatae rem, aliquam, expedita odit dicta quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ullam ipsa eveniet eaque iure aspernatur debitis ipsam dicta necessitatibus autem eos vel ab delectus aliquam assumenda quaerat quas, blanditiis dolor.', 'mael', 'machinenantes.JPG');

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
('Homme', 'Henry', 'Altice', 'Rue du paradis', '12345', 'Atlantide', 'henry@gmail.fr', '0619473615', 'Partenriat', ' Je vous propose de faire un partenariat avec moi.', 'Bernard'),
('Homme', 'test', 'jenairienafaire', '5 rue du boulet', '44952', 'idiotville', 'jesuisbet@idiot.com', '0808459244', 'test', ' reaaafafaf', 'test'),
('Homme', 'test', 'jenairienafaire', '5 rue du boulet', '44952', 'idiotville', 'jesuisbet@idiot.com', '0808459244', 'test', ' reaaafafaf', 'test'),
('Homme', 'test', 'jenairienafaire', '5 rue du boulet', '44952', 'idiotville', 'jesuisbet@idiot.com', '0808459244', 'test', 'tedgzgggzgzgzf', 'test'),
('Homme', 'test', 'jenairienafaire', '5 rue du boulet', '44952', 'idiotville', 'jesuisbet@idiot.com', '0808459244', 'test', 'tedgzgggzgzgzf', 'test'),
('Homme', 'test', 'jenairienafaire', '5 rue du boulet', '44952', 'idiotville', 'jesuisbet@idiot.com', '0808459244', 'test', 'tedgzgggzgzgzf', 'test'),
('Homme', 'sfz', 'fzfzf', 'zfzfz', 'zfzf', 'fzfzfz', 'mael.bournigal@ynov.com', '5544', 'ada', ' dadad', 'histoires');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
