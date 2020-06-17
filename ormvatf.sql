-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 17 juin 2020 à 16:22
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ormvatf`
--

-- --------------------------------------------------------

--
-- Structure de la table `amenagement_et_service_eau`
--

DROP TABLE IF EXISTS `amenagement_et_service_eau`;
CREATE TABLE IF NOT EXISTS `amenagement_et_service_eau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `amenagement_et_service_eau`
--

INSERT INTO `amenagement_et_service_eau` (`id`, `sujet`, `contenu`) VALUES
(1, 'Pistes', 'pages/Pistes.txt'),
(2, 'PMH', 'pages/PMH.txt'),
(3, 'Système irrigation localisée', 'pages/SIL.txt'),
(4, 'GH', 'pages/GH.txt'),
(5, 'Etude', 'pages/Etudes.txt');

-- --------------------------------------------------------

--
-- Structure de la table `developpement_agricole`
--

DROP TABLE IF EXISTS `developpement_agricole`;
CREATE TABLE IF NOT EXISTS `developpement_agricole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `developpement_agricole`
--

INSERT INTO `developpement_agricole` (`id`, `sujet`, `contenu`) VALUES
(1, 'Filières animales', 'pages/F-animales.txt'),
(2, 'Filières végétales', 'pages/F-vegetales.txt'),
(3, 'Campagne agricole', 'pages/Campagne-agricole.txt'),
(4, 'Organisations professionnelles', 'pages/Organisations-pro.txt');

-- --------------------------------------------------------

--
-- Structure de la table `documentation`
--

DROP TABLE IF EXISTS `documentation`;
CREATE TABLE IF NOT EXISTS `documentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero_genre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `documentation`
--

INSERT INTO `documentation` (`id`, `type`, `nom`, `lien`, `numero_genre`) VALUES
(1, 'application/pdf', 'Dépliant OMRVATF', 'fichiers/Dépliant OMRVATF.pdf', 1),
(2, 'application/pdf', 'التلقيح الاصطناعي', 'fichiers/التلقيح الاصطناعي.pdf', 2),
(3, 'application/pdf', 'السلوجة', 'fichiers/السلوجة.pdf', 2),
(4, 'application/pdf', 'Bilan sidattes 2016', 'fichiers/Bilan SIDATTES 2016 def.pdf', 3),
(5, 'application/pdf', 'PUBLICATION COMPTES ORMVA_TF 2014', 'fichiers/PUBLICATION AU BO des Etats de synthese 2014.pdf', 3),
(6, 'application/pdf', 'RAPPORT DE GESTION 2013 PART 2', 'fichiers/RAPPORT GESTION 2013 PART2.pdf', 3),
(7, 'application/pdf', 'RAPPORT DE GESTION 2013 PART 1', 'fichiers/RAPPORT GESTION 2013 PART1.pdf', 3),
(8, 'application/pdf', 'RAPPORT DE GESTION 2013 PART 4', 'fichiers/RAPPORT GESTION 2013 PART4.pdf', 3),
(9, 'application/pdf', 'RAPPORT DE GESTION 2013 PART 3', 'fichiers/RAPPORT GESTION 2013 PART3.pdf', 3),
(10, 'application/pdf', 'RAPPORT DE GESTION 2013 PART 5', 'fichiers/RAPPORT GESTION 2013 PART5.pdf', 3),
(11, 'application/pdf', 'RAPPORT DE GESTION 2011', 'fichiers/Rapport gestion CA 2011.pdf', 3),
(12, 'application/pdf', 'RAPPORT DE GESTION 2012', 'fichiers/RAPPORT DE GESTION CA 2012 VF.pdf', 3),
(13, 'application/pdf', 'RAPPORT DE GESTION 2010', 'fichiers/rapport de gestion 2010 VF.pdf', 3),
(14, 'application/pdf', 'RAPPORT DE GESTION 2009', 'fichiers/rapport de gestion 2009.pdf', 3),
(15, 'application/pdf', 'PUBLICATION COMPTES ORMVA_TF 2013', 'fichiers/BO PUBLICATION COMPTES ORMVA_TF 2013.pdf', 3),
(16, 'application/pdf', 'Rapport de gestion 2008', 'fichiers/RAPPORT DE GESTION  2008.pdf', 3),
(17, 'application/pdf', 'Loi n° 10-95 sur l\'eau', 'fichiers/LOI_N_10-95 SUR L-\'EAU.pdf', 4),
(18, 'application/pdf', 'Recueils et textes juridiques agriculture 2010', 'fichiers/RECUEILS TEXTES JURIDIQUES AGRICULTURE 2010.pdf', 4),
(19, 'application/pdf', 'Subdivions et CMV ORMVA Tafilalet', 'fichiers/Subdivions et CMV ORMVA Tafilalet.pdf', 4),
(20, 'application/pdf', 'Textes délimitant les périmètres irriguées de l\'ORMVATF', 'fichiers/TEXTES DELIMITANT PERIMETRES IRRIGUES ORMVATF.pdf', 4),
(21, 'application/pdf', 'Textes délimiatnt la zone d\'action de l\'ORMVATF', 'fichiers/TEXTES DELIMITANT ZONE D-\'ACTION ORMVATF..pdf', 4),
(22, 'application/pdf', 'Arrêté Organisation ORMVA/TF', 'fichiers/ARRERE ORG ORMVATF 76,84 & 87.pdf', 4),
(23, 'application/pdf', 'Decrect creation Office', 'fichiers/DECRET ROYAL CREATION ORMVATF.pdf', 4);

-- --------------------------------------------------------

--
-- Structure de la table `guichet_unique`
--

DROP TABLE IF EXISTS `guichet_unique`;
CREATE TABLE IF NOT EXISTS `guichet_unique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `guichet_unique`
--

INSERT INTO `guichet_unique` (`id`, `sujet`, `contenu`) VALUES
(1, 'Guichet unique', 'pages/Presentation-GU.txt'),
(2, 'Imprimés à télécharger', 'pages/Imprimes.txt'),
(3, 'Procédure de l\'octroi de subvention', 'pages/Procedure.txt');

-- --------------------------------------------------------

--
-- Structure de la table `news_events`
--

DROP TABLE IF EXISTS `news_events`;
CREATE TABLE IF NOT EXISTS `news_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `date` date NOT NULL,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(20000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `news_events`
--

INSERT INTO `news_events` (`id`, `type`, `date`, `sujet`, `contenu`) VALUES
(1, 1, '2019-08-27', 'Annonce important', 'exemple de contenu d\'actualités'),
(3, 1, '2019-08-26', 'Annonce important 2', 'exemplaire d\'actualités'),
(4, 2, '2019-08-21', 'Fête des dattes à Erfoud', 'La récolte des dattes, un fruit exotique spécial, se fête au Maroc. Cette année elle sera célébrée mi-fin octobre. L’événement sera riche en activités car des expositions, des dégustations, la vente de différentes variétés de dattes seront au programme. En outre, il y aura aussi des spectacles de rue, des processions et des danses folkloriques qui ne feront que réchauffer les amateurs de dattes mais surtout les amateurs de fêtes.'),
(7, 2, '2019-08-26', 'Event', 'event test');

-- --------------------------------------------------------

--
-- Structure de la table `office`
--

DROP TABLE IF EXISTS `office`;
CREATE TABLE IF NOT EXISTS `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `office`
--

INSERT INTO `office` (`id`, `sujet`, `contenu`) VALUES
(1, 'Mot de directeur', 'pages/Mot-directeur.txt'),
(2, 'Missions', 'pages/Missions.txt'),
(3, 'Monographie', 'pages/Monographie.txt'),
(4, 'Organigramme', 'pages/Organigramme.txt');

-- --------------------------------------------------------

--
-- Structure de la table `plan_maroc_vert`
--

DROP TABLE IF EXISTS `plan_maroc_vert`;
CREATE TABLE IF NOT EXISTS `plan_maroc_vert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `plan_maroc_vert`
--

INSERT INTO `plan_maroc_vert` (`id`, `sujet`, `contenu`) VALUES
(1, 'Plan Maroc Vert', 'pages/PAR.txt'),
(2, 'Projet Pilier I', 'pages/Projet-Pilier-I.txt'),
(3, 'Projet Pilier II', 'pages/Projet-Pilier-II.txt');

-- --------------------------------------------------------

--
-- Structure de la table `potentialites_investissement`
--

DROP TABLE IF EXISTS `potentialites_investissement`;
CREATE TABLE IF NOT EXISTS `potentialites_investissement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `potentialites_investissement`
--

INSERT INTO `potentialites_investissement` (`id`, `sujet`, `contenu`) VALUES
(1, 'Opportunités d\'investissement', 'pages/Presentation-PI.txt'),
(2, 'Guide d\'investissement', 'pages/Guide-investissement.txt'),
(3, 'Suivi des investissements', 'pages/Suivi-investissements.txt');

-- --------------------------------------------------------

--
-- Structure de la table `projets_structurants`
--

DROP TABLE IF EXISTS `projets_structurants`;
CREATE TABLE IF NOT EXISTS `projets_structurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `projets_structurants`
--

INSERT INTO `projets_structurants` (`id`, `sujet`, `contenu`) VALUES
(1, 'Kaddoussa', 'pages/Kaddoussa.txt'),
(2, 'Aménagement des parcours', 'pages/Amenagement-parcours.txt');

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

DROP TABLE IF EXISTS `ressources`;
CREATE TABLE IF NOT EXISTS `ressources` (
  `sujet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sujet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`sujet`, `contenu`) VALUES
('Khettara', 'pages/khettara.txt'),
('Oasis', 'pages/Oasis.txt');

-- --------------------------------------------------------

--
-- Structure de la table `site_organisme`
--

DROP TABLE IF EXISTS `site_organisme`;
CREATE TABLE IF NOT EXISTS `site_organisme` (
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horaire_travail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `site_organisme`
--

INSERT INTO `site_organisme` (`nom`, `adresse`, `telephone`, `fax`, `courriel`, `horaire_travail`) VALUES
('Office Régional de Mise en Valeur Agricole du Tafilalet', 'ORMVA/ Tafilalet, B.P. 17 Errachidia, Maroc', '(+212) 05 35 57 25 04', '(+212) 05 35 57 22 52', 'contact@ormvatafilalet.ma', 'Lundi — Vendredi 8:30 - 16:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
