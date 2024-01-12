-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 nov. 2023 à 20:50
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
-- Base de données : `scolarite1`
--

-- --------------------------------------------------------

--
-- Structure de la table `modifgrade`
--

CREATE TABLE `modifgrade` (
  `NGmodif` int(11) NOT NULL,
  `Grade` varchar(30) NOT NULL,
  `DateNomin` datetime NOT NULL,
  `MatProf` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `modifgrade`
--

INSERT INTO `modifgrade` (`NGmodif`, `Grade`, `DateNomin`, `MatProf`) VALUES
(3, 'sarra1', '2023-10-01 00:00:00', 2),
(9, 'ens', '2023-11-09 00:00:00', 4),
(11, 'etudiant', '2023-11-13 00:00:00', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `modifgrade`
--
ALTER TABLE `modifgrade`
  ADD PRIMARY KEY (`NGmodif`,`Grade`,`DateNomin`,`MatProf`),
  ADD UNIQUE KEY `UC_Grade` (`Grade`),
  ADD UNIQUE KEY `UC_DateNomin` (`DateNomin`),
  ADD UNIQUE KEY `UC_MatProf` (`MatProf`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `modifgrade`
--
ALTER TABLE `modifgrade`
  MODIFY `NGmodif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `modifgrade`
--
ALTER TABLE `modifgrade`
  ADD CONSTRAINT `modifgrade_ibfk_1` FOREIGN KEY (`MatProf`) REFERENCES `Prof` (`Matricule Prof`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
