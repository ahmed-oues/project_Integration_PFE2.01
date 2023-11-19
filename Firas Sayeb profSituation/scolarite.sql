-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `Grade` char(25) NOT NULL,
  `ChargeTP` double DEFAULT NULL,
  `ChargeC` double DEFAULT NULL,
  `ChargeTD` double DEFAULT NULL,
  `GradeArab` char(25) DEFAULT NULL,
  `ChargeCI` double DEFAULT NULL,
  `ChargeTotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`Grade`, `ChargeTP`, `ChargeC`, `ChargeTD`, `GradeArab`, `ChargeCI`, `ChargeTotal`) VALUES
('g1', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `MatriculeProf` int(6) NOT NULL,
  `nom` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`MatriculeProf`, `nom`) VALUES
(1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `profsituation`
--

CREATE TABLE `profsituation` (
  `CodeProf` int(11) NOT NULL,
  `Sess` int(11) NOT NULL,
  `Situation` varchar(35) NOT NULL,
  `Grade` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profsituation`
--

INSERT INTO `profsituation` (`CodeProf`, `Sess`, `Situation`, `Grade`) VALUES
(1, 1, 'a', 'g1');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Numero` int(11) NOT NULL,
  `Annee` char(5) NOT NULL,
  `Sem` char(1) NOT NULL,
  `Debut` datetime DEFAULT NULL,
  `Fin` datetime DEFAULT NULL,
  `Debsem` datetime DEFAULT NULL,
  `Finsem` datetime DEFAULT NULL,
  `Annea` char(5) DEFAULT NULL,
  `Anneab` char(5) DEFAULT NULL,
  `SemAb` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Numero`, `Annee`, `Sem`, `Debut`, `Fin`, `Debsem`, `Finsem`, `Annea`, `Anneab`, `SemAb`) VALUES
(1, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `situation`
--

CREATE TABLE `situation` (
  `SituationID` int(11) NOT NULL,
  `SituationName` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `situation`
--

INSERT INTO `situation` (`SituationID`, `SituationName`) VALUES
(1, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`Grade`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`MatriculeProf`);

--
-- Indexes for table `profsituation`
--
ALTER TABLE `profsituation`
  ADD PRIMARY KEY (`CodeProf`,`Sess`,`Situation`),
  ADD KEY `Sess` (`Sess`),
  ADD KEY `Grade` (`Grade`),
  ADD KEY `Situation` (`Situation`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`SituationName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profsituation`
--
ALTER TABLE `profsituation`
  ADD CONSTRAINT `profsituation_ibfk_1` FOREIGN KEY (`CodeProf`) REFERENCES `prof` (`MatriculeProf`),
  ADD CONSTRAINT `profsituation_ibfk_2` FOREIGN KEY (`Sess`) REFERENCES `session` (`Numero`),
  ADD CONSTRAINT `profsituation_ibfk_3` FOREIGN KEY (`Grade`) REFERENCES `grades` (`Grade`),
  ADD CONSTRAINT `profsituation_ibfk_4` FOREIGN KEY (`Situation`) REFERENCES `situation` (`SituationName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
