-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 nov. 2023 à 18:50
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actionmembres`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionmember`
--

CREATE TABLE `actionmember` (
  `NumAction` int(11) NOT NULL,
  `NumProf` smallint(6) NOT NULL,
  `DatePart` datetime NOT NULL,
  `Qualité` varchar(20) DEFAULT NULL,
  `Dpt` char(55) DEFAULT NULL,
  `Opt` char(55) DEFAULT NULL,
  `Niveau` char(12) DEFAULT NULL,
  `CodeMat` char(10) DEFAULT NULL,
  `Remarque` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actionmember`
--

INSERT INTO `actionmember` (`NumAction`, `NumProf`, `DatePart`, `Qualité`, `Dpt`, `Opt`, `Niveau`, `CodeMat`, `Remarque`) VALUES
(12, 98, '2023-10-14 00:00:00', 'kjncdc', 'kndck jc', 'knekcnec', 'lkndck', 'kdjnck', '0'),
(45, 344, '2023-10-07 00:00:00', 'kjbdkds', 'dnczkncz', 'dnjknzcz', 'ndkvnjzvdc', 'kdnkzdv', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actionmember`
--
ALTER TABLE `actionmember`
  ADD UNIQUE KEY `NumAction` (`NumAction`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
