-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 déc. 2022 à 17:19
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
  `articleTitle` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `articleText` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`articleId`, `articleTitle`, `articleText`) VALUES
(1, 'MON ARTICLE', 'cet article est sodmihfhqoshufoqsuhdfilqsuhdf  soudhfqsuhdf qsuoh fushidfuh lsi dfiusf');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `SettingsName` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `SettingsDescription` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `SettingsValue` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`SettingsName`),
  UNIQUE KEY `name` (`SettingsName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`SettingsName`, `SettingsDescription`, `SettingsValue`) VALUES
('instance_email_host', 'URL de l\'instance email', 'smtp-relay.sendinblue.com'),
('instance_email_password', 'Mot de passe Email de l\'instance', 'ZPAg7DzFVG0WfLrn'),
('instance_email_port', 'Port Email de l\'instance', '587'),
('instance_email_support', 'Email SUPPORT de l\'instance', 'mathis.lambert27@gmail.com'),
('instance_email_username', 'Email de l\'instance', 'mathislambert.dev@gmail.com'),
('instance_status', 'Status de l\'instance Calendry', 'dev'),
('instance_url', 'URL de l\'instance', 'http://orasis2023.test/'),
('name', 'nom de l\'instance', 'ORASIS');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userFirstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userLastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `userRole` int NOT NULL,
  `userCreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userPassword` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `userFirstname`, `userLastname`, `userEmail`, `userRole`, `userCreationDate`, `userPassword`) VALUES
(1, 'Mathis', 'Lambert', 'mathislambert.dev@gmail.com', 3, '2022-11-15 09:04:34', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `written`
--

INSERT INTO `written` (`writtenId`, `writtenDate`, `writtenUserId`, `writtenArticleId`) VALUES
(1, '2022-11-15 09:26:11', 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `written`
--
ALTER TABLE `written`
  ADD CONSTRAINT `written_article` FOREIGN KEY (`writtenArticleId`) REFERENCES `article` (`articleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `written_by` FOREIGN KEY (`writtenUserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
