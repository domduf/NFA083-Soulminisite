-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 04 Mai 2016 à 20:49
-- Version du serveur :  10.1.10-MariaDB
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `soul_1mai`
--

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `inst_id` int(11) NOT NULL,
  `inst_nom` enum('chant','flûte','clarinette','saxophone','trompette','trombone','tuba','guitare','basse','batterie','percussions','piano / orgue','autre','sans') DEFAULT NULL,
  `inst_type` varchar(10) DEFAULT NULL,
  `inst_marque` varchar(20) DEFAULT NULL,
  `inst_no_serie` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `instrument`
--

INSERT INTO `instrument` (`inst_id`, `inst_nom`, `inst_type`, `inst_marque`, `inst_no_serie`) VALUES
(1, 'trombone', 'basse', 'King', '92174'),
(2, 'trompette', 'Bb', 'Yamaha', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `mem_id` int(11) NOT NULL,
  `inst_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `jouer`
--

INSERT INTO `jouer` (`mem_id`, `inst_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `mem_id` int(11) NOT NULL,
  `mem_login` char(25) DEFAULT NULL,
  `mem_mdp` char(100) DEFAULT NULL,
  `mem_persona` enum('Internaute','Mobinaute','Gestionaire') DEFAULT NULL,
  `mem_activite` enum('oui','non') DEFAULT NULL,
  `mem_civilite` enum('M.','Mme','Mlle') DEFAULT NULL,
  `mem_nom` varchar(20) DEFAULT NULL,
  `mem_prenom` varchar(20) NOT NULL,
  `mem_date_naiss` date DEFAULT NULL,
  `mem_sexe` enum('masculin','feminin') DEFAULT NULL,
  `mem_centre_interet` varchar(120) DEFAULT NULL,
  `mem_article` text,
  `mem_membre_bureau` char(15) DEFAULT NULL,
  `mem_email` char(100) DEFAULT NULL,
  `mem_adres_num` int(11) DEFAULT NULL,
  `mem_adres_rue` text,
  `mem_adres_cp` varchar(5) DEFAULT NULL,
  `mem_adres_ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`mem_id`, `mem_login`, `mem_mdp`, `mem_persona`, `mem_activite`, `mem_civilite`, `mem_nom`, `mem_prenom`, `mem_date_naiss`, `mem_sexe`, `mem_centre_interet`, `mem_article`, `mem_membre_bureau`, `mem_email`, `mem_adres_num`, `mem_adres_rue`, `mem_adres_cp`, `mem_adres_ville`) VALUES
(1, 'domduf', '$1$4KnWd8jG$vDbYy8SFMggkh4pRTOqiD/', 'Gestionaire', 'oui', 'M.', 'Dufour', 'Dominique', '1967-03-26', 'masculin', NULL, NULL, NULL, 'dom.duf@coucou.com', 5, 'rue de la Motte', '45170', 'NEUVILLE AUX BOIS'),
(2, 'bobol', NULL, 'Mobinaute', 'oui', 'M.', 'Bolard', 'Christian', NULL, 'masculin', NULL, NULL, 'président', NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD CONSTRAINT `FK_jouer_inst_id` FOREIGN KEY (`inst_id`) REFERENCES `instrument` (`inst_id`),
  ADD CONSTRAINT `FK_jouer_mem_id` FOREIGN KEY (`mem_id`) REFERENCES `membre` (`mem_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
