-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 juin 2020 à 03:44
-- Version du serveur :  10.1.35-MariaDB
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `glrs_quizz`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE `jeu` (
  `idJeu` int(11) NOT NULL,
  `nbreQuestionsPerGame` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`idJeu`, `nbreQuestionsPerGame`) VALUES
(1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `idQuestions` int(11) NOT NULL,
  `libelleQuestion` varchar(2000) NOT NULL,
  `libelleTypeQuestion` varchar(2000) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`idQuestions`, `libelleQuestion`, `libelleTypeQuestion`, `points`) VALUES
(1, 'Quel est mon nom ?', 'cs', 3),
(2, 'Mes pays', 'cm', 3),
(3, 'Le nom de mon quartier ?', 'texte', 1),
(4, 'Ou suis-je nÃ© ?', 'cs', 3),
(7, 'Quel est mon ecole ?', 'cs', 1),
(8, 'Quel est la marque de chips parmi les rÃ©ponses suivantes ?', 'cs', 3),
(9, 'En quelle licence suis-je ? ', 'cs', 1),
(11, 'Quel est ma prochaine formation ?', 'texte', 3),
(12, 'Mon artiste du moment ?', 'texte', 1),
(13, 'La prochaine console de Sony est ?', 'cs', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `idReponse` int(11) NOT NULL,
  `libelleReponse` varchar(1000) NOT NULL,
  `statut` varchar(10) NOT NULL,
  `idQuestions` int(11) DEFAULT NULL,
  `libelleQuestion` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`idReponse`, `libelleReponse`, `statut`, `idQuestions`, `libelleQuestion`) VALUES
(1, 'ZIANGBE', 'true', 1, 'Quel est mon nom ?'),
(2, 'Naruto', 'false', 1, 'Quel est mon nom ?'),
(3, 'Tanjiro', 'false', 1, 'Quel est mon nom ?'),
(4, 'Togo', 'false', 1, 'Mes pays'),
(5, 'Maroc', 'false', 1, 'Mes pays'),
(6, 'SÃ©nÃ©gal', 'true', 1, 'Mes pays'),
(7, 'MÃ©dina', 'true', 1, 'Le nom de mon quartier ?'),
(8, 'LomÃ©', 'true', 1, 'Ou suis-je nÃ© ?'),
(9, 'Dakar', 'false', 1, 'Ou suis-je nÃ© ?'),
(10, 'Las Vegas', 'false', 1, 'Ou suis-je nÃ© ?'),
(13, 'Institut SupÃ©rieur de Management', 'true', 1, 'Quel est mon ecole ?'),
(14, 'Kit Kat', 'false', 1, 'Quel est la marque de chips parmi les rÃ©ponses suivantes ?'),
(15, 'Pringles', 'true', 1, 'Quel est la marque de chips parmi les rÃ©ponses suivantes ?'),
(16, 'Kirene', 'false', 1, 'Quel est la marque de chips parmi les rÃ©ponses suivantes ?'),
(17, 'ETSE', 'false', 1, 'En quelle licence suis-je ? '),
(18, 'GLRS', 'true', 1, 'En quelle licence suis-je ? '),
(19, 'MAE', 'false', 1, 'En quelle licence suis-je ? '),
(21, 'Business Intelligence', 'true', 1, 'Quel est ma prochaine formation ?'),
(22, 'DaBaby', 'true', 1, 'Mon artiste du moment ?'),
(23, 'Xbox series x', 'false', 1, 'La prochaine console de Sony est ?'),
(24, 'Ps5', 'true', 1, 'La prochaine console de Sony est ?'),
(25, 'Super Nes', 'false', 1, 'La prochaine console de Sony est ?');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `avatar` varchar(150) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `fullName`, `login`, `pwd`, `profil`, `avatar`, `score`) VALUES
(2, 'ThePlayer', 'joueur', 'joueur', 'joueur', 'joueur.png', 0),
(7, 'soka', 'katar', 'avatar', 'joueur', 'joueur.jpeg', 0),
(8, 'TheAdmin', 'admin', 'admin', 'admin', 'admin.jpeg', 0),
(9, 'ThePlayer', 'joueur', 'joueur', 'joueur', 'joueur.png', 0),
(10, 'alberic Ziangbe', 'alziangbe', 'alziangbe', 'admin', 'admin.jpeg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`idJeu`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idQuestions`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`idReponse`),
  ADD KEY `idQuestions` (`idQuestions`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `idJeu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `idQuestions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `idReponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`idQuestions`) REFERENCES `questions` (`idQuestions`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
