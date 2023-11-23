-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 05:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `matieres`
--

CREATE TABLE `matieres` (
  `Code_Matiere` varchar(10) NOT NULL,
  `Nom_Matiere` varchar(50) DEFAULT NULL,
  `Coef_Matiere` float DEFAULT NULL,
  `Departement` varchar(55) DEFAULT NULL,
  `Semestre` varchar(12) DEFAULT NULL,
  `Options` varchar(55) DEFAULT NULL,
  `Nb_Heure_CI` double DEFAULT NULL,
  `Nb_Heure_TP` double DEFAULT NULL,
  `TypeLabo` varchar(13) DEFAULT NULL,
  `Bonus` double DEFAULT NULL,
  `Categories` varchar(35) DEFAULT NULL,
  `SousCategories` varchar(35) DEFAULT NULL,
  `DateDeb` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `PK_Matieres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matieres`
--

INSERT INTO `matieres` (`Code_Matiere`, `Nom_Matiere`, `Coef_Matiere`, `Departement`, `Semestre`, `Options`, `Nb_Heure_CI`, `Nb_Heure_TP`, `TypeLabo`, `Bonus`, `Categories`, `SousCategories`, `DateDeb`, `DateFin`, `PK_Matieres`) VALUES
('ffff', 'dd', 0, '', ' ', '', 0, 0, '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2),
('555', 'ffff', 0, 's', ' s', 'ss', 0, 0, '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10),
('fs', '', 0, '', ' ', '', 0, 0, '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12),
('vvv', 'ffff', 0, '', ' ', '', 0, 0, '', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15),
('fsh', '', 0, '', ' ', '', 0, 0, '', 1, '', '', '2023-11-19 19:10:00', '2023-11-22 19:10:00', 16),
('py', 'python', 1, 'info', ' 1', 'oui', 2, 2, 'ti1.4', 1, 'coding', 'langauge', '2023-11-21 16:21:00', '2023-11-30 16:21:00', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`PK_Matieres`),
  ADD UNIQUE KEY `Code_Matiere` (`Code_Matiere`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `PK_Matieres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
