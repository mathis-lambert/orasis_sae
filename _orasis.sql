-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 nov. 2022 à 08:12
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `orasis`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `articleId` int NOT NULL AUTO_INCREMENT,
  `articleTitle` varchar(1024) NOT NULL,
  `articleText` text NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`articleId`, `articleTitle`, `articleText`) VALUES
(1, 'MON ARTICLE', 'cet article est sodmihfhqoshufoqsuhdfilqsuhdf  soudhfqsuhdf qsuoh fushidfuh lsi dfiusf');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userFirstname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userLastname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userAge` int NOT NULL,
  `userEmail` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userRole` int NOT NULL,
  `userCreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userPassword` varchar(512) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `userFirstname`, `userLastname`, `userAge`, `userEmail`, `userRole`, `userCreationDate`, `userPassword`) VALUES
(2, 'Mathis', 'Lambert', 19, 'mathislambert.dev@gmail.com', 3, '2022-11-15 09:04:34', '');

-- --------------------------------------------------------

--
-- Structure de la table `written`
--

DROP TABLE IF EXISTS `written`;
CREATE TABLE IF NOT EXISTS `written` (
  `writtenId` int NOT NULL AUTO_INCREMENT,
  `writtenDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `writtenUserId` int NOT NULL,
  `writtenArticleId` int NOT NULL,
  PRIMARY KEY (`writtenId`),
  KEY `written_by` (`writtenUserId`),
  KEY `written_article` (`writtenArticleId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
