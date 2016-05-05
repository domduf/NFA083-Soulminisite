-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Mai 2016 à 17:04
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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(50) NOT NULL,
  `contact_nom` varchar(30) NOT NULL,
  `contact_prenom` varchar(30) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_telephone` int(10) NOT NULL,
  `contact_objet` int(3) DEFAULT NULL,
  `contact_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_nom`, `contact_prenom`, `contact_email`, `contact_telephone`, `contact_objet`, `contact_message`) VALUES
(1, 'Dufour', 'Dominique', 'dom.duf@mail.fr', 123456789, 2, 'salut au site, super exemple, continuez.');

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
(2, 'trompette', 'Bb', 'Yamaha', NULL),
(3, 'chant', 'lead', NULL, NULL),
(4, 'trompette', 'Bb', 'Yamaha', NULL);

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
(2, 2),
(3, 3),
(4, 4);

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
  `mem_lien_photo` varchar(100) DEFAULT NULL,
  `mem_membre_bureau` char(15) DEFAULT NULL,
  `mem_email` char(100) DEFAULT NULL,
  `mem_adres_num` int(11) DEFAULT NULL,
  `mem_adres_rue` varchar(150) DEFAULT NULL,
  `mem_adres_cp` varchar(5) DEFAULT NULL,
  `mem_adres_ville` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`mem_id`, `mem_login`, `mem_mdp`, `mem_persona`, `mem_activite`, `mem_civilite`, `mem_nom`, `mem_prenom`, `mem_date_naiss`, `mem_sexe`, `mem_centre_interet`, `mem_article`, `mem_lien_photo`, `mem_membre_bureau`, `mem_email`, `mem_adres_num`, `mem_adres_rue`, `mem_adres_cp`, `mem_adres_ville`) VALUES
(1, 'domduf', '$1$4KnWd8jG$vDbYy8SFMggkh4pRTOqiD/', 'Gestionaire', 'oui', 'M.', 'Dufour', 'Dominique', '1967-03-26', 'masculin', NULL, 'Dominique est un tromboniste formé au conservatoire d''Orléans par Monsieur Alain Recordier.', './images/musicos/Dom.jpg', NULL, 'dom.duf@coucou.com', 5, 'rue de la Motte', '45170', 'NEUVILLE AUX BOIS'),
(2, 'bobol', NULL, 'Mobinaute', 'oui', 'M.', 'Bolard', 'Christian', NULL, 'masculin', NULL, 'Christian, dit Bobol est le fondateur et président du groupe.\r\nIl a joué dans un groupe de bal très connu avec Jeff son mentor.\r\nMalgrès so grand âge (il est en 1955) c''est le plus jeune de tous. ', './images/musicos/Bol.jpg', 'président', NULL, NULL, NULL, NULL, NULL),
(3, 'dine', NULL, 'Internaute', 'oui', 'Mme', NULL, 'Sadrine', NULL, 'feminin', NULL, 'Sandrine chante depuis peu...mais quel talent !\r\nElle fait vibrer d''émotion tout auditeur, même le plus insensible.\r\nLe Brass Band Val de Loire a fait appel a elle pour chanter un générique d''un des James Bond, le Big Band de Saran a la joie  de la mettre en avant lors de ses concerts.', './images/musicos/Dine.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'stfgim', NULL, 'Internaute', 'oui', 'M.', 'Gimonet', 'Stephane', NULL, 'masculin', NULL, 'Stéphane, dit "Mister Lips" est le pointeur (celui qui joue dans l''aigü) de la section de cuivre.\r\nD''une formation informatique, il a préféré  garder la musique comme activité secondaire, mais ses capacités sot terribles !', './images/StfG.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

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
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `instrument`
--
ALTER TABLE `instrument`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
