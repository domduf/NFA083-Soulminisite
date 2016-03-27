-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 26 Mars 2016 à 18:40
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  7.0.4

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
  `adresse_cp` varchar(5) DEFAULT NULL,
  `adresse_ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `droit_acces`
--

CREATE TABLE `droit_acces` (
  `acces_id` int(11) NOT NULL,
  `acces_type` char(20) NOT NULL,
  `acces_description` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Structure de la table `habiter`
--

CREATE TABLE `habiter` (
  `mem_id` char(12) NOT NULL,
  `adr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `mem_membre_bureau` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posseder`
--

CREATE TABLE `posseder` (
  `mem_id` char(12) NOT NULL,
  `acces_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Index pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD PRIMARY KEY (`mem_id`,`adr_id`),
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
  ADD PRIMARY KEY (`mem_id`,`inst_id`),
  ADD KEY `FK_jouer_inst_id` (`inst_id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`mem_id`);

--
-- Index pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`mem_id`,`acces_id`),
  ADD KEY `FK_posseder_acces_id` (`acces_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `adr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `droit_acces`
--
ALTER TABLE `droit_acces`
  MODIFY `acces_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `FK_email_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

--
-- Contraintes pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD CONSTRAINT `FK_habiter_adr_id` FOREIGN KEY (`adr_id`) REFERENCES `adresse` (`adr_id`),
  ADD CONSTRAINT `FK_habiter_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `FK_jouer_inst_id` FOREIGN KEY (`inst_id`) REFERENCES `instrument` (`inst_id`),
  ADD CONSTRAINT `FK_jouer_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

--
-- Contraintes pour la table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `FK_posseder_acces_id` FOREIGN KEY (`acces_id`) REFERENCES `droit_acces` (`acces_id`),
  ADD CONSTRAINT `FK_posseder_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
