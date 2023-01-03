-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 jan. 2023 à 22:33
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
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `articleId` int NOT NULL AUTO_INCREMENT,
  `articleTitle` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `articleText` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int NOT NULL AUTO_INCREMENT,
  `messageUserId` int NOT NULL,
  `messageText` text COLLATE utf8_unicode_ci NOT NULL,
  `messageDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `messageStatus` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ok',
  PRIMARY KEY (`messageId`),
  KEY `messageUserID` (`messageUserId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

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
('instance_email_host', 'URL de l\'instance email', 'YOUR_EMAIL_HOST'),
('instance_email_password', 'Mot de passe Email de l\'instance', 'YOUR_EMAIL_PASSWORD'),
('instance_email_port', 'Port Email de l\'instance', 'YOUR_SMTP_PORT'),
('instance_email_support', 'Email SUPPORT de l\'instance', 'YOUR_EMAIL_ASSISTANCE'),
('instance_email_username', 'Email de l\'instance', 'YOUR_EMAIL'),
('instance_status', 'Status de l\'instance Calendry', 'dev'),
('instance_url', 'URL de l\'instance', 'INSTANCE_URL'),
('name', 'nom de l\'instance', 'NOM_INSTANCE');

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
  `userRole` int NOT NULL DEFAULT '10',
  `userCreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userPassword` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Structure de la table `written`
--

DROP TABLE IF EXISTS `written`;
CREATE TABLE IF NOT EXISTS `written` (
  `writtenId` int NOT NULL AUTO_INCREMENT,
  `writtenDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `writtenUserId` int NOT NULL,
  `writtenArticleId` int NOT NULL,
  `writtenStatus` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`writtenId`),
  KEY `written_by` (`writtenUserId`),
  KEY `written_article` (`writtenArticleId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messageUserID` FOREIGN KEY (`messageUserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `written`
--
ALTER TABLE `written`
  ADD CONSTRAINT `written_article` FOREIGN KEY (`writtenArticleId`) REFERENCES `articles` (`articleId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `written_by` FOREIGN KEY (`writtenUserId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
