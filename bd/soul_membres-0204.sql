-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 02 Avril 2016 à 12:23
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soul_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `adr_id` int(11) NOT NULL,
  `adresse_immeuble` varchar(15) DEFAULT NULL,
  `adresse_num` smallint(6) DEFAULT NULL,
  `adresse_rue` varchar(50) DEFAULT NULL,
  `adresse_cp` decimal(5,0) DEFAULT NULL,
  `adresse_ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`adr_id`, `adresse_immeuble`, `adresse_num`, `adresse_rue`, `adresse_cp`, `adresse_ville`) VALUES
(1, NULL, 5, 'rue de la Motte', '45170', 'Neuville aux Bois');

-- --------------------------------------------------------

--
-- Structure de la table `droit_acces`
--

CREATE TABLE `droit_acces` (
  `acces_id` int(11) NOT NULL,
  `acces_type` char(20) NOT NULL,
  `acces_description` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `droit_acces`
--

INSERT INTO `droit_acces` (`acces_id`, `acces_type`, `acces_description`) VALUES
(1, 'aucun', 'aucune connection'),
(2, 'Gestionnaire', 'accès à toutes les fonctionnalités (sauf modif bd)'),
(3, 'Musicien', 'modif article musiciens\r\nconsulter ruriques associées'),
(4, 'Internaute', 'pour ceux qui veulent recevoir des nouvelles par mail, ou\r\nqui ot rempli un formulaire de contact'),
(5, 'Administrateur', 'accès total à la gestion du site  \r\ny compris BD (base de données)');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `email_nom` varchar(35) NOT NULL,
  `email_domaine` varchar(25) NOT NULL,
  `email_ordre` enum('perso','travail','secondaire','secours') DEFAULT NULL,
  `mem_id` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `email`
--

INSERT INTO `email` (`email_id`, `email_nom`, `email_domaine`, `email_ordre`, `mem_id`) VALUES
(1, 'dominique.duf', 'wanadoo.fr', 'travail', 'domduf'),
(2, 'dominique.duf', 'gmail.com', 'perso', 'domduf');

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `inst_id` int(11) NOT NULL,
  `inst_nom` enum('chant','flûte','clarinette','saxophone','trompette','trombone','tuba','guitare','basse','batterie','percussions','piano / orgue','autre','sans') DEFAULT NULL,
  `inst_type` varchar(10) DEFAULT NULL,
  `inst_marque` varchar(20) DEFAULT NULL,
  `inst_no_serie` varchar(15) DEFAULT NULL,
  `inst_personnel` enum('oui','non') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `instrument`
--

INSERT INTO `instrument` (`inst_id`, `inst_nom`, `inst_type`, `inst_marque`, `inst_no_serie`, `inst_personnel`) VALUES
(1, 'trombone', 'basse', 'King', NULL, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `mem_id` char(12) NOT NULL,
  `inst_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `mem_id` char(12) NOT NULL,
  `mem_activite` enum('oui','non') DEFAULT NULL,
  `mem_civilite` enum('M.','Mme','Mlle') NOT NULL,
  `mem_Nom` varchar(20) DEFAULT NULL,
  `mem_prenom` varchar(20) NOT NULL,
  `mem_date_naiss` date NOT NULL,
  `mem_sexe` enum('masculin','feminin') NOT NULL,
  `mem_centre_interet` varchar(120) DEFAULT NULL,
  `mem_article` text,
  `mem_membre_bureau` char(15) DEFAULT NULL,
  `adr_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`mem_id`, `mem_activite`, `mem_civilite`, `mem_Nom`, `mem_prenom`, `mem_date_naiss`, `mem_sexe`, `mem_centre_interet`, `mem_article`, `mem_membre_bureau`, `adr_id`) VALUES
('', 'non', 'M.', NULL, 'Fantomas', '2016-03-28', 'masculin', NULL, NULL, NULL, NULL),
('domduf', 'oui', 'M.', 'Dufour', 'Dominique', '1967-03-26', 'masculin', NULL, NULL, NULL, 1),
('herylala', 'non', 'M.', 'Ratzimbazafy', 'Hery', '0000-00-00', 'masculin', NULL, NULL, NULL, NULL),
('philippe', 'non', 'M.', 'Bouquet', 'Philippe', '0000-00-00', 'masculin', NULL, NULL, NULL, NULL),
('sophtou', 'non', 'Mlle', NULL, 'Sophie', '1968-05-11', 'feminin', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `se_connecter`
--

CREATE TABLE `se_connecter` (
  `se_connecter_mdp` char(255) NOT NULL, -- permet d'entrer des mdp cryptés assez longs, voir http://php.net/manual/fr/function.password-hash.php
  `mem_id` char(12) NOT NULL,
  `acces_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `se_connecter`
--

INSERT INTO `se_connecter` (`se_connecter_mdp`, `mem_id`, `acces_id`) VALUES
('$1$ZnrsBXtl$Q5n2Sd9ETuVJLzSHWGfDr.', 'domduf', 2),
('$1$ZnrsBXtl$Q5n2Sd9ETuVJLzSHWGfDr.', 'domduf', 3),
('$1$ZnrsBXtl$Q5n2Sd9ETuVJLzSHWGfDr.', 'domduf', 4),
('$1$ZnrsBXtl$Q5n2Sd9ETuVJLzSHWGfDr.', 'domduf', 5),
('$1$XQa5AEP9$NflIrrYAlCST4lTpChe68/', 'herylala', 2),
('$1$XQa5AEP9$NflIrrYAlCST4lTpChe68/', 'herylala', 3),
('$1$XQa5AEP9$NflIrrYAlCST4lTpChe68/', 'herylala', 4),
('$1$xfL9cXN6$jj47Kcc7r5X8n65ha6Ob1.', 'philippe', 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`adr_id`);

--
-- Index pour la table `droit_acces`
--
ALTER TABLE `droit_acces`
  ADD PRIMARY KEY (`acces_id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `FK_email_mem_id` (`mem_id`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`inst_id`);

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`mem_id`,`inst_id`),
  ADD KEY `FK_jouer_inst_id` (`inst_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `FK_membre_adr_id` (`adr_id`);

--
-- Index pour la table `se_connecter`
--
ALTER TABLE `se_connecter`
  ADD PRIMARY KEY (`mem_id`,`acces_id`),
  ADD KEY `FK_se_connecter_acces_id` (`acces_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `adr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `droit_acces`
--
ALTER TABLE `droit_acces`
  MODIFY `acces_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `FK_email_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `FK_jouer_inst_id` FOREIGN KEY (`inst_id`) REFERENCES `instrument` (`inst_id`),
  ADD CONSTRAINT `FK_jouer_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_membre_adr_id` FOREIGN KEY (`adr_id`) REFERENCES `adresse` (`adr_id`);

--
-- Contraintes pour la table `se_connecter`
--
ALTER TABLE `se_connecter`
  ADD CONSTRAINT `FK_se_connecter_acces_id` FOREIGN KEY (`acces_id`) REFERENCES `droit_acces` (`acces_id`),
  ADD CONSTRAINT `FK_se_connecter_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
