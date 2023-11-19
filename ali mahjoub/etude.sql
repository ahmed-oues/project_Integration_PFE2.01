-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 nov. 2023 à 00:09
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etude`
--

-- --------------------------------------------------------

--
-- Structure de la table `dossieretud`
--

CREATE TABLE `dossieretud` (
  `Ndossier` int(11) NOT NULL,
  `Motif` varchar(50) DEFAULT NULL,
  `MatEtud` char(10) DEFAULT NULL,
  `TypePiece` int(11) DEFAULT NULL,
  `DatePiece` date DEFAULT NULL,
  `Session` int(11) DEFAULT NULL,
  `nomfichierpiece` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dossieretud`
--

INSERT INTO `dossieretud` (`Ndossier`, `Motif`, `MatEtud`, `TypePiece`, `DatePiece`, `Session`, `nomfichierpiece`) VALUES
(29, 'eeee', 'a55', 1, '2000-04-22', 2022, 'eeeea5512000-04-222022-2023.png');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `Typepiece` int(11) NOT NULL,
  `LibPiece` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`Typepiece`, `LibPiece`) VALUES
(1, 'CIN'),
(2, 'Passport');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dossieretud`
--
ALTER TABLE `dossieretud`
  ADD PRIMARY KEY (`Ndossier`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`Typepiece`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dossieretud`
--
ALTER TABLE `dossieretud`
  MODIFY `Ndossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `Typepiece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
