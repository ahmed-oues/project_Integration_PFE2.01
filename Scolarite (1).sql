-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 06:02 PM
-- Server version: 8.0.35-0ubuntu0.23.04.1
-- PHP Version: 8.1.12-1ubuntu4.3

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
-- Table structure for table `Classe`
--

CREATE TABLE `Classe` (
  `CodClasse` char(9) NOT NULL,
  `IntClasse` char(60) DEFAULT NULL,
  `Departement` char(55) DEFAULT NULL,
  `ClassOption` char(55) DEFAULT NULL,
  `Niveau` char(12) DEFAULT NULL,
  `IntCalsseArabB` char(60) DEFAULT NULL,
  `OptionAaraB` char(55) DEFAULT NULL,
  `DepartementAaraB` char(55) DEFAULT NULL,
  `NiveauAaraB` char(10) DEFAULT NULL,
  `CodeEtape` varchar(8) DEFAULT NULL,
  `CodeSalima` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Departements`
--

CREATE TABLE `Departements` (
  `Département` char(55) NOT NULL,
  `Responsable` char(50) DEFAULT NULL,
  `MatProf` char(10) DEFAULT NULL,
  `DepartementARAB` char(55) DEFAULT NULL,
  `CodeDep` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DossierEtud`
--

CREATE TABLE `DossierEtud` (
  `Ndossier` bigint NOT NULL,
  `Motif` varchar(50) DEFAULT NULL,
  `MatEtud` char(10) DEFAULT NULL,
  `TypePiece` int DEFAULT NULL,
  `DatePiece` datetime DEFAULT NULL,
  `Session` int DEFAULT NULL,
  `nomfichierpiece` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Etudiant`
--

CREATE TABLE `Etudiant` (
  `Nom` char(25) DEFAULT NULL,
  `DateNais` datetime DEFAULT NULL,
  `NCIN` char(10) NOT NULL,
  `NCE` char(15) DEFAULT NULL,
  `TypBac` char(20) DEFAULT NULL,
  `Prenom` char(25) DEFAULT NULL,
  `Sexe` int DEFAULT NULL,
  `LieuNais` char(60) DEFAULT NULL,
  `Adresse` char(100) DEFAULT NULL,
  `Ville` char(30) DEFAULT NULL,
  `CodePostal` smallint DEFAULT NULL,
  `NTel` char(10) DEFAULT NULL,
  `CodClasse` char(9) DEFAULT NULL,
  `DecisionduConseil` char(12) DEFAULT NULL,
  `AnneeUnversitaire` char(5) DEFAULT NULL,
  `Semestre` tinyint DEFAULT NULL,
  `Dispenser` int NOT NULL,
  `Anneesopt` datetime DEFAULT NULL,
  `DatePremiereInscp` datetime DEFAULT NULL,
  `Gouvernorat` char(12) DEFAULT NULL,
  `MentionduBac` char(12) DEFAULT NULL,
  `Nationalite` char(25) DEFAULT NULL,
  `CodeCNSS` char(3) DEFAULT NULL,
  `NomArabe` char(25) DEFAULT NULL,
  `PrenomArabe` char(25) DEFAULT NULL,
  `LieuNaisArabe` char(60) DEFAULT NULL,
  `AdresseArabe` char(100) DEFAULT NULL,
  `VilleArabe` char(30) DEFAULT NULL,
  `GouvernoratArabe` char(15) DEFAULT NULL,
  `TypeBacAB` char(15) DEFAULT NULL,
  `Photo` char(10) DEFAULT NULL,
  `Origine` char(20) DEFAULT NULL,
  `SituationDpart` char(25) DEFAULT NULL,
  `NBAC` char(12) DEFAULT NULL,
  `Redaut` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Gouvernorats`
--

CREATE TABLE `Gouvernorats` (
  `Gouv` varchar(20) NOT NULL,
  `CodPostal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Grades`
--

CREATE TABLE `Grades` (
  `Grade` char(25) NOT NULL,
  `ChargeTP` double DEFAULT NULL,
  `ChargeC` double DEFAULT NULL,
  `ChargeTD` double DEFAULT NULL,
  `GradeArab` char(25) DEFAULT NULL,
  `ChargeCI` double DEFAULT NULL,
  `ChargeTotal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Inscriptions`
--

CREATE TABLE `Inscriptions` (
  `CodeClasse` char(9) NOT NULL,
  `MatEtud` char(10) NOT NULL,
  `Session` int NOT NULL,
  `DateInscription` datetime DEFAULT NULL,
  `DecisionConseil` char(12) DEFAULT '*****',
  `Rachat` tinyint NOT NULL DEFAULT '0',
  `MoyGen` double DEFAULT NULL,
  `Dispense` tinyint NOT NULL DEFAULT '0',
  `TauxAbsences` float DEFAULT NULL,
  `Redouble` tinyint NOT NULL DEFAULT '0',
  `StOuv` varchar(20) DEFAULT NULL,
  `StTech` char(20) DEFAULT NULL,
  `TypeInscrip` char(7) DEFAULT 'NR',
  `MontantIns` char(13) DEFAULT NULL,
  `NumIns` int NOT NULL,
  `Remarque` char(20) DEFAULT NULL,
  `Sitfin` char(20) DEFAULT NULL,
  `Montant` decimal(18,0) DEFAULT NULL,
  `NoteSO` double DEFAULT NULL,
  `NoteST` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Jours`
--

CREATE TABLE `Jours` (
  `N` int NOT NULL,
  `Lundi` char(10) DEFAULT NULL,
  `Mardi` char(10) DEFAULT NULL,
  `Mercredi` char(10) DEFAULT NULL,
  `Jeudi` char(10) DEFAULT NULL,
  `Vendredi` char(10) DEFAULT NULL,
  `Samedi` char(10) DEFAULT NULL,
  `CodeProf` smallint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Matieres`
--

CREATE TABLE `Matieres` (
  `CodeMatiere` char(10) NOT NULL,
  `NomMatiere` char(50) DEFAULT NULL,
  `CoefMatiere` float DEFAULT NULL,
  `Departement` char(55) DEFAULT NULL,
  `Semestre` char(12) DEFAULT NULL,
  `OptionMatiere` char(55) DEFAULT NULL,
  `NbHeureCI` double DEFAULT NULL,
  `NbHeureTP` double DEFAULT NULL,
  `TypeLabo` char(13) DEFAULT NULL,
  `Bonus` double DEFAULT NULL,
  `Categories` char(35) DEFAULT NULL,
  `SousCategories` char(35) DEFAULT NULL,
  `DateDeb` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `OptionNiveau`
--

CREATE TABLE `OptionNiveau` (
  `OptionNiveau` char(55) NOT NULL,
  `Niveau` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Options`
--

CREATE TABLE `Options` (
  `Option` char(55) NOT NULL,
  `Departement` char(55) DEFAULT NULL,
  `OptionAraB` char(55) DEFAULT NULL,
  `CodeOption` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ProfSituation`
--

CREATE TABLE `ProfSituation` (
  `CodeProf` int NOT NULL,
  `Sess` int NOT NULL,
  `Situation` varchar(35) DEFAULT NULL,
  `Grade` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `RatVol`
--

CREATE TABLE `RatVol` (
  `NumRatV` int NOT NULL,
  `MatProf` smallint NOT NULL,
  `DateRat` datetime NOT NULL,
  `Seance` char(10) NOT NULL,
  `Session` int NOT NULL,
  `Salle` char(10) NOT NULL,
  `Jour` char(10) NOT NULL,
  `CodeClasse` char(9) DEFAULT NULL,
  `CodeMatiere` char(10) DEFAULT NULL,
  `Etat` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SEANCES`
--

CREATE TABLE `SEANCES` (
  `SEANCE` char(3) NOT NULL,
  `Horaire` char(13) DEFAULT NULL,
  `HDeb` char(10) DEFAULT NULL,
  `HFin` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Semaine`
--

CREATE TABLE `Semaine` (
  `NumSem` int NOT NULL,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `Session` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sess`
--

CREATE TABLE `sess` (
  `Numero` int NOT NULL,
  `Annee` char(5) DEFAULT NULL,
  `Sem` char(1) DEFAULT NULL,
  `Debut` datetime DEFAULT NULL,
  `Fin` datetime DEFAULT NULL,
  `Debsem` datetime DEFAULT NULL,
  `Finsem` datetime DEFAULT NULL,
  `NSemSesdeb` int NOT NULL,
  `NSemSesFin` int NOT NULL,
  `Ann4` char(9) DEFAULT NULL,
  `Ann4ab` char(9) DEFAULT NULL,
  `SemAb` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Session`
--

CREATE TABLE `Session` (
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

-- --------------------------------------------------------

--
-- Table structure for table `TypeLocal`
--

CREATE TABLE `TypeLocal` (
  `TypeLocal` varchar(25) NOT NULL,
  `Gategorie` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classe`
--
ALTER TABLE `Classe`
  ADD PRIMARY KEY (`CodClasse`);

--
-- Indexes for table `Departements`
--
ALTER TABLE `Departements`
  ADD PRIMARY KEY (`CodeDep`);

--
-- Indexes for table `DossierEtud`
--
ALTER TABLE `DossierEtud`
  ADD PRIMARY KEY (`Ndossier`);

--
-- Indexes for table `Etudiant`
--
ALTER TABLE `Etudiant`
  ADD PRIMARY KEY (`NCIN`),
  ADD UNIQUE KEY `NCIN` (`NCIN`);

--
-- Indexes for table `Gouvernorats`
--
ALTER TABLE `Gouvernorats`
  ADD PRIMARY KEY (`Gouv`);

--
-- Indexes for table `Grades`
--
ALTER TABLE `Grades`
  ADD PRIMARY KEY (`Grade`);

--
-- Indexes for table `Inscriptions`
--
ALTER TABLE `Inscriptions`
  ADD PRIMARY KEY (`NumIns`);

--
-- Indexes for table `Jours`
--
ALTER TABLE `Jours`
  ADD PRIMARY KEY (`N`);

--
-- Indexes for table `Matieres`
--
ALTER TABLE `Matieres`
  ADD PRIMARY KEY (`CodeMatiere`);

--
-- Indexes for table `OptionNiveau`
--
ALTER TABLE `OptionNiveau`
  ADD PRIMARY KEY (`OptionNiveau`,`Niveau`);

--
-- Indexes for table `Options`
--
ALTER TABLE `Options`
  ADD PRIMARY KEY (`Option`);

--
-- Indexes for table `ProfSituation`
--
ALTER TABLE `ProfSituation`
  ADD PRIMARY KEY (`CodeProf`);

--
-- Indexes for table `RatVol`
--
ALTER TABLE `RatVol`
  ADD PRIMARY KEY (`NumRatV`);

--
-- Indexes for table `SEANCES`
--
ALTER TABLE `SEANCES`
  ADD PRIMARY KEY (`SEANCE`);

--
-- Indexes for table `Semaine`
--
ALTER TABLE `Semaine`
  ADD PRIMARY KEY (`NumSem`);

--
-- Indexes for table `sess`
--
ALTER TABLE `sess`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `Session`
--
ALTER TABLE `Session`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `TypeLocal`
--
ALTER TABLE `TypeLocal`
  ADD PRIMARY KEY (`TypeLocal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DossierEtud`
--
ALTER TABLE `DossierEtud`
  MODIFY `Ndossier` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Inscriptions`
--
ALTER TABLE `Inscriptions`
  MODIFY `NumIns` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `RatVol`
--
ALTER TABLE `RatVol`
  MODIFY `NumRatV` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
