-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 30 déc. 2022 à 17:37
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`articleId`, `articleTitle`, `articleText`) VALUES
(1, 'The Tragic Reality of AI: When Machines Outperform Humans', '    <h2>Artificial Intelligence: An Overview</h2>\n    <p>Artificial intelligence, or AI, refers to the ability of a machine or computer system to mimic or replicate intelligent human behavior. This includes the ability to learn, reason, and solve problems in a way that is similar to how a human would. AI has the potential to revolutionize many different fields and industries, including healthcare, transportation, and finance.</p>\n    <h3>Types of AI</h3>\n    <p>There are several different types of AI, each with its own characteristics and capabilities:</p>\n    <ul>\n      <li><strong>Weak AI</strong>, also known as narrow AI, is designed to perform a specific task. It is not capable of general intelligence and cannot adapt to new situations or tasks. Examples of weak AI include virtual personal assistants like Siri and Alexa, and self-driving cars.</li>\n      <li><strong>General AI</strong>, also known as strong AI, is a type of AI that is capable of understanding or learning any intellectual task that a human being can. It has the ability to adapt to new situations and learn from experience, similar to a human being. General AI does not currently exist, but is a topic of active research and development in the field of AI.</li>\n      <li><strong>Supervised learning</strong> is a type of machine learning in which a model is trained on labeled data, meaning that the data has been labeled with the correct output. The model uses this labeled data to learn how to make predictions on new, unseen data. Supervised learning is commonly used for tasks such as image classification and spam filtering.</li>\n      <li><strong>Unsupervised learning</strong> is a type of machine learning in which a model is not given any labeled data and must find patterns and relationships in the data on its own. It is commonly used for tasks such as anomaly detection and cluster analysis.</li>\n      <li><strong>Reinforcement learning</strong> is a type of machine learning in which an agent learns to interact with its environment in order to maximize a reward. It is commonly used in robotics and video games, and has also been applied to areas such as finance and energy management.</li>\n    </ul>\n    <h2>Applications of AI</h2>\n    <p>AI has the potential to transform many different fields and industries. Some potential applications of AI include:</p>\n    <ul>\n      <li>Automation of tasks and processes, such as customer service and data entry</li>\n      <li>Improving decision-making through data analysis and machine learning</li>\n      <li>Predictive maintenance in manufacturing and other industries</li>\n      <li>Diagnosis and treatment in healthcare, including image analysis and disease prediction</li>\n      <li>Enhancing transportation safety through autonomous vehicles</li>\n      <li>Improving energy efficiency through smart grids and intelligent building management systems</li>\n      <li>Personalization of products and services through customer analytics and behavior prediction</li>\n    </ul>');

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
  `userRole` int NOT NULL DEFAULT '10',
  `userCreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userPassword` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `userFirstname`, `userLastname`, `userEmail`, `userRole`, `userCreationDate`, `userPassword`) VALUES
(10, 'Mathis', 'Lambert', 'mathis.lambert27@gmail.com', 3, '2022-12-20 19:17:41', '$2y$10$jrsBq/AMcs7JXXzuj5bdhOxjXw6JJfxqzmCXCYxaDD4R4kT3Obrw6'),
(12, 'longobardi', 'test', 'test@mail.com', 1, '2022-12-21 12:33:15', '$2y$10$t.SEXePsHZCZRuMNqo0mGeEpOQD.bGhH2u0mW/wNMbspmUnuekwC6'),
(14, 'testname', 'testfirstname', 'mail@mail.test', 0, '2022-12-29 18:30:51', '$2y$10$vwQc5Bes50nB81hf.8SZxudravZztLT.6416/OQdHmAjtTUTPxa.e');

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
  `writtenStatus` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`writtenId`),
  KEY `written_by` (`writtenUserId`),
  KEY `written_article` (`writtenArticleId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `written`
--

INSERT INTO `written` (`writtenId`, `writtenDate`, `writtenUserId`, `writtenArticleId`, `writtenStatus`) VALUES
(2, '2022-12-28 11:49:11', 10, 1, 'published');

--
-- Contraintes pour les tables déchargées
--

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
