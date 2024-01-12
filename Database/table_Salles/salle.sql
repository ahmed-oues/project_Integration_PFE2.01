-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 06:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scolarite`
--

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `Salle` varchar(20) NOT NULL,
  `Departement` varchar(55) DEFAULT NULL,
  `Categorie` varchar(12) DEFAULT NULL,
  `Responsable` varchar(10) DEFAULT NULL,
  `Charge` tinyint(4) DEFAULT NULL,
  `Nb_place_examen` tinyint(4) DEFAULT NULL,
  `Nb_lignes` tinyint(4) DEFAULT NULL,
  `Nb_col` tinyint(4) DEFAULT NULL,
  `Nb_surv` smallint(6) DEFAULT NULL,
  `Type` varchar(25) DEFAULT NULL,
  `Disponible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`Salle`, `Departement`, `Categorie`, `Responsable`, `Charge`, `Nb_place_examen`, `Nb_lignes`, `Nb_col`, `Nb_surv`, `Type`, `Disponible`) VALUES
('LI2.4', 'Informatique', 'tp', 'Mr foulen ', 25, 25, 0, 0, 0, 'TP ', 8),
('LI2.3', 'Gestion', 'laboratoire', 'Mr felten', 26, 0, 0, 0, 0, 'TP', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
