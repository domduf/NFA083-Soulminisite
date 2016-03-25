-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 22 Mars 2016 à 22:21
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soul_musicien`
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
  `adresse_cp` varchar(5) DEFAULT NULL,
  `adresse_ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`adr_id`, `adresse_immeuble`, `adresse_num`, `adresse_rue`, `adresse_cp`, `adresse_ville`) VALUES
(1, NULL, 5, 'rue de la Motte', '45170', 'Neuville aux Bois');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `email_nom` varchar(35) NOT NULL,
  `email_domaine` varchar(25) NOT NULL,
  `email_ordre` enum('perso','travail','secondaire','secours') DEFAULT NULL,
  `mus_id` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `email`
--

INSERT INTO `email` (`email_id`, `email_nom`, `email_domaine`, `email_ordre`, `mus_id`) VALUES
(1, 'dominique.duf', 'wanadoo.fr', 'travail', 'domduf'),
(2, 'dominique.duf', 'gmail.com', 'perso', 'domduf');

-- --------------------------------------------------------

--
-- Structure de la table `habiter`
--

CREATE TABLE `habiter` (
  `mus_id` char(6) NOT NULL,
  `adr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `habiter`
--

INSERT INTO `habiter` (`mus_id`, `adr_id`) VALUES
('domduf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `inst_id` int(11) NOT NULL,
  `inst_nom` enum('chant','flûte','clarinette','saxophone','trompette','trombone','tuba','basse','batterie','percussions','piano / orgue','autre') DEFAULT NULL,
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
  `mus_id` char(6) NOT NULL,
  `inst_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `jouer`
--

INSERT INTO `jouer` (`mus_id`, `inst_id`) VALUES
('domduf', 1);

-- --------------------------------------------------------

--
-- Structure de la table `musicos`
--

CREATE TABLE `musicos` (
  `mus_id` char(6) NOT NULL,
  `mus_activite` enum('oui','non') DEFAULT NULL,
  `mus_civilite` enum('M.','Mme','Mlle') NOT NULL,
  `mus_Nom` varchar(20) DEFAULT NULL,
  `mus_prenom` varchar(20) NOT NULL,
  `mus_date_naiss` date NOT NULL,
  `mus_sexe` enum('masculin','feminin') NOT NULL,
  `mus_centre_interet` varchar(120) DEFAULT NULL,
  `mus_article` text,
  `mus_membre_bureau` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `musicos`
--

INSERT INTO `musicos` (`mus_id`, `mus_activite`, `mus_civilite`, `mus_Nom`, `mus_prenom`, `mus_date_naiss`, `mus_sexe`, `mus_centre_interet`, `mus_article`, `mus_membre_bureau`) VALUES
('domduf', 'oui', 'M.', 'Dufour', 'Dominique', '1967-03-26', 'masculin', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`adr_id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `FK_email_mus_id` (`mus_id`);

--
-- Index pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD PRIMARY KEY (`mus_id`,`adr_id`),
  ADD KEY `FK_habiter_adr_id` (`adr_id`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`inst_id`);

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`mus_id`,`inst_id`),
  ADD KEY `FK_jouer_inst_id` (`inst_id`);

--
-- Index pour la table `musicos`
--
ALTER TABLE `musicos`
  ADD PRIMARY KEY (`mus_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `adr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  ADD CONSTRAINT `FK_email_mus_id` FOREIGN KEY (`mus_id`) REFERENCES `musicos` (`mus_id`);

--
-- Contraintes pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD CONSTRAINT `FK_habiter_adr_id` FOREIGN KEY (`adr_id`) REFERENCES `adresse` (`adr_id`),
  ADD CONSTRAINT `FK_habiter_mus_id` FOREIGN KEY (`mus_id`) REFERENCES `musicos` (`mus_id`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `FK_jouer_inst_id` FOREIGN KEY (`inst_id`) REFERENCES `instrument` (`inst_id`),
  ADD CONSTRAINT `FK_jouer_mus_id` FOREIGN KEY (`mus_id`) REFERENCES `musicos` (`mus_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
