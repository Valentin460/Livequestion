-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 30 Avril 2021 à 21:44
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `livequestion`
--
CREATE DATABASE IF NOT EXISTS `livequestion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `livequestion`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`) VALUES
(1, 'Sport'),
(2, 'Musique'),
(3, 'Cinéma'),
(4, 'Jeux'),
(5, 'Histoire'),
(6, 'Science'),
(7, 'Politique'),
(8, 'Télévision'),
(9, 'Art'),
(10, 'Gastronomie'),
(11, 'Voyage'),
(12, 'Géographie'),
(13, 'Économie');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_question` int(11) NOT NULL,
  `titre_question` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `date_creation_question` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id_question`, `titre_question`, `id_categorie`, `id_utilisateur`, `date_creation_question`) VALUES
(52, 'Bonjour', 5, 10, '2021-04-26 20:11:05'),
(53, 'Pourquoi la terre est ronde ?', 6, 10, '2021-04-26 21:26:09'),
(54, 'Qui est Thomas Pesquet ?', 8, 10, '2021-04-26 21:27:01'),
(57, 'Qui est Christophe Colomb ?', 5, 45, '2021-04-30 22:00:40'),
(58, 'Ronaldo ou Messi ?', 1, 44, '2021-04-30 22:02:52'),
(59, 'Qui aimerait voyager ?', 11, 44, '2021-04-30 22:17:38'),
(60, 'Qui est le président de la République ?', 7, 45, '2021-04-30 23:24:42');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `id_reponse` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `date_reponse` datetime DEFAULT NULL,
  `question_reponse` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reponses`
--

INSERT INTO `reponses` (`id_reponse`, `id_utilisateur`, `id_question`, `date_reponse`, `question_reponse`) VALUES
(12, 44, 57, '2021-04-30 22:11:05', 'Il a traversé l\'Atlantique et découvert l\'Amérique'),
(13, 44, 54, '2021-04-30 22:12:59', 'C\'est un spationaute français !'),
(14, 44, 52, '2021-04-30 22:13:23', 'Que voulez-vous poser comme question ?'),
(15, 10, 58, '2021-04-30 22:14:54', 'Ronaldo a réalisé beaucoup de buts et a remporté beaucoup de trophées !'),
(16, 44, 53, '2021-04-30 22:16:16', 'Mais non elle est plate, on ne vous a donc pas dit ?'),
(17, 10, 59, '2021-04-30 22:18:16', 'Moi !'),
(28, 10, 60, '2021-04-30 23:25:45', 'Le président de la République actuellement est Emmanuel Macron');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(255) DEFAULT NULL,
  `email_utilisateur` varchar(255) DEFAULT NULL,
  `mot_de_passe_utilisateur` varchar(255) DEFAULT NULL,
  `avatar_utilisateur` varchar(255) DEFAULT NULL,
  `genre_utilisateur` varchar(255) DEFAULT NULL,
  `date_inscription_utilisateur` datetime DEFAULT NULL,
  `role_utilisateur` varchar(255) DEFAULT 'utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo_utilisateur`, `email_utilisateur`, `mot_de_passe_utilisateur`, `avatar_utilisateur`, `genre_utilisateur`, `date_inscription_utilisateur`, `role_utilisateur`) VALUES
(10, 'Valentin460', 'valentin.arthur1000@gmail.com', 'befa156f0283eb0062beb9b86e16a413e1cf8c5135e5518d5c4fa321ce0c7b6b', 'Arthur.jpg', 'Homme', '2021-04-12 13:11:24', 'administrateur'),
(44, 'Aleksandar16', 'a.milenkovic321@gmail.com', 'aa3d2fe4f6d301dbd6b8fb2d2fddfb7aeebf3bec53ffff4b39a0967afa88c609', 'lemon.jpg', 'Homme', '2021-04-30 21:28:24', 'administrateur'),
(45, 'perrinecoupy', 'perrinecoupy@gmail.com', 'aa3d2fe4f6d301dbd6b8fb2d2fddfb7aeebf3bec53ffff4b39a0967afa88c609', 'Photopc.png', 'Femme', '2021-04-30 21:56:11', 'administrateur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `fk_cat_id` (`id_categorie`),
  ADD KEY `fk_aut_id` (`id_utilisateur`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `fk_user_id` (`id_utilisateur`),
  ADD KEY `fk_quest_id` (`id_question`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_auteur_question` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categorie_question` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `fk_auteur_reponse` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categorie_reponse` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
