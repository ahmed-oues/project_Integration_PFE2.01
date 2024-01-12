-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2024 at 05:11 PM
-- Server version: 8.0.35-0ubuntu0.23.10.1
-- PHP Version: 8.2.10-2ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Scolarite`
--

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Numero` int NOT NULL,
  `Annee` char(5) NOT NULL,
  `Sem` char(1) NOT NULL,
  `Debut` datetime DEFAULT NULL,
  `Fin` datetime DEFAULT NULL,
  `Debsem` datetime DEFAULT NULL,
  `Finsem` datetime DEFAULT NULL,
  `Annea` char(5) DEFAULT NULL,
  `Anneab` char(5) DEFAULT NULL,
  `SemAb` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Numero`, `Annee`, `Sem`, `Debut`, `Fin`, `Debsem`, `Finsem`, `Annea`, `Anneab`, `SemAb`) VALUES
(1, '2023', '1', '2023-11-25 09:00:00', '2023-11-25 17:00:00', '2023-11-25 09:00:00', '2023-11-25 17:00:00', '2024', '2025', '2'),
(2, '2', '1', '2024-01-05 00:00:00', '2024-01-25 00:00:00', '2024-01-01 00:00:00', '2024-01-26 00:00:00', '2', '2', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
