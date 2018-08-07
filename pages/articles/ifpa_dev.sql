-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 août 2018 à 08:35
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ifpa_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(120) DEFAULT NULL,
  `contenu` longtext,
  `date_article` datetime DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `publie` tinyint(1) DEFAULT NULL,
  `tags` mediumtext,
  `resume` mediumtext,
  `photo` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `contenu`, `date_article`, `id_utilisateur`, `id_categorie`, `publie`, `tags`, `resume`, `photo`) VALUES
(1, 'test 1', 'c est un test c est le premier', '2018-08-06 03:00:00', 1, 2, 0, 'test', 'test de test', 'photo_test.png'),
(2, 'test20', 'c est un nouveau test', '2018-08-06 11:00:00', 2, 3, 0, 'test etst tes', 'test2', 'photo_test2.png');

-- --------------------------------------------------------

--
-- Structure de la table `banniere`
--

DROP TABLE IF EXISTS `banniere`;
CREATE TABLE IF NOT EXISTS `banniere` (
  `id_banniere` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_banniere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`, `parent`, `description`) VALUES
(2, 'php', NULL, 'programmation en PHP'),
(3, 'cobol', NULL, 'programmation en COBOL'),
(4, 'réseaux', NULL, 'montage d un réseau info');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `publie` tinyint(1) DEFAULT NULL,
  `commentaire` longtext,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_utilisateur`, `id_article`, `date`, `publie`, `commentaire`) VALUES
(1, 2, 1, '2018-07-06 00:00:00', 1, 'zehfzlekhf ze jfzekj zemklf jzemkf azf fezk jfzeml jfmze'),
(2, 3, 4, '2018-07-03 00:00:00', 0, 'c\'est vraiment un connard le gars qui a écrit ça'),
(3, 4, 6, '2018-05-03 00:00:00', 1, 'sans déconner un article comme ça est censé nous faire réagir ?'),
(4, 7, 8, '2016-01-03 00:00:00', 1, 'on commenc epar où ?'),
(5, 13, 12, '2017-12-06 00:00:00', 1, 'hello il y a quelqu un ici ???'),
(6, 1, 1, '2018-07-07 00:00:00', 1, 'arrête de regarder ce que suis en train d ecrire!!! ');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `id_galerie` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(120) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `lien` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id_galerie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`id_galerie`, `photo`, `position`, `lien`) VALUES
(1, 'photo', 1, '5'),
(2, 'beau', 3, 'www.bla'),
(3, 'moche', 2, 'www.photo');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `moderateur` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `mdp` longtext,
  `id_role` varchar(45) DEFAULT NULL,
  `date_anniv` datetime DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `tel`, `login`, `mdp`, `id_role`, `date_anniv`) VALUES
(1, 'Jeanne', 'Xavier', 'xavier.jeanne@gmail.com', '0612121212', 'jxavier', 'a327d196e8b6400ed5993024589cb46f5f30d2bbb1b451aea2d5bc6a76f41b53', '0', '1998-01-01 00:00:00'),
(2, 'Duderque', 'Michel', 'Michel.Duderque@jacki.com', '0123456789', 'dmichel', 'c12e03ac35291748b586a3ad98d4a14f468b6504bfef858c6626371ed37ba7b7', '1', '1789-08-20 11:42:07'),
(3, 'Jean', 'Bonnot', 'jean.bonnot@superfaim.com', '0613131313', 'jbonnot', 'adba33b37d00ac5757292b21528c3306a80067109970f14640abd6f5b4f74dd0', '2', '1993-11-01 00:00:00'),
(4, 'Conda', 'Anna', 'groscalibre@mabte.com', '0548965317', 'canna', 'b3c64c611ebd5f0e7aa1340179786fe2c98be65fb94156d82d247278d70ae47e', '2', '1542-08-26 09:14:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
