-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 17 nov. 2018 à 18:08
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
-- Base de données :  `fotoforyou`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_menu` varchar(50) DEFAULT NULL,
  `lien_menu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idmenu`),
  UNIQUE KEY `nommenu` (`nom_menu`),
  UNIQUE KEY `lien` (`lien_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`idmenu`, `nom_menu`, `lien_menu`) VALUES
(1, 'Acheter des credits', 'achatcredits.php'),
(2, 'Acheter des images', 'achatimages.php'),
(3, 'Nous contacter', 'contacts.php'),
(4, 'Connexion', 'connexion.php'),
(5, 'Inscription', 'inscription.php');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `mail_user` varchar(50) NOT NULL,
  `prenom_user` varchar(20) DEFAULT NULL,
  `nom_user` varchar(40) DEFAULT NULL,
  `pseudo_user` varchar(30) DEFAULT NULL,
  `type_user` varchar(11) DEFAULT NULL,
  `mdp_user` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`mail_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
