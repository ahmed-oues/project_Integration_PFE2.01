-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: Scolarite
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Classe`
--

DROP TABLE IF EXISTS `Classe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `CodeSalima` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`CodClasse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Classe`
--

LOCK TABLES `Classe` WRITE;
/*!40000 ALTER TABLE `Classe` DISABLE KEYS */;
INSERT INTO `Classe` VALUES ('CL001','Computer Science A','Computer Science Department','Programming','Underg','Arabic Class A','Programming Arabic','Computer Science Arabic','Undergr','CS101','SAL001');
/*!40000 ALTER TABLE `Classe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Departements`
--

DROP TABLE IF EXISTS `Departements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Departements` (
  `Département` char(55) NOT NULL,
  `Responsable` char(50) DEFAULT NULL,
  `MatProf` char(10) DEFAULT NULL,
  `DepartementARAB` char(55) DEFAULT NULL,
  `CodeDep` char(2) NOT NULL,
  PRIMARY KEY (`CodeDep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Departements`
--

LOCK TABLES `Departements` WRITE;
/*!40000 ALTER TABLE `Departements` DISABLE KEYS */;
/*!40000 ALTER TABLE `Departements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DossierEtud`
--

DROP TABLE IF EXISTS `DossierEtud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `DossierEtud` (
  `Ndossier` bigint NOT NULL AUTO_INCREMENT,
  `Motif` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `MatEtud` char(10) DEFAULT NULL,
  `TypePiece` int DEFAULT NULL,
  `DatePiece` datetime DEFAULT NULL,
  `Session` int DEFAULT NULL,
  `nomfichierpiece` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Ndossier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DossierEtud`
--

LOCK TABLES `DossierEtud` WRITE;
/*!40000 ALTER TABLE `DossierEtud` DISABLE KEYS */;
/*!40000 ALTER TABLE `DossierEtud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Etudiant`
--

DROP TABLE IF EXISTS `Etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `Redaut` tinyint DEFAULT NULL,
  PRIMARY KEY (`NCIN`),
  UNIQUE KEY `NCIN` (`NCIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Etudiant`
--

LOCK TABLES `Etudiant` WRITE;
/*!40000 ALTER TABLE `Etudiant` DISABLE KEYS */;
/*!40000 ALTER TABLE `Etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Gouvernorats`
--

DROP TABLE IF EXISTS `Gouvernorats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Gouvernorats` (
  `Gouv` varchar(20) NOT NULL,
  `CodPostal` int NOT NULL,
  PRIMARY KEY (`Gouv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Gouvernorats`
--

LOCK TABLES `Gouvernorats` WRITE;
/*!40000 ALTER TABLE `Gouvernorats` DISABLE KEYS */;
/*!40000 ALTER TABLE `Gouvernorats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Grades`
--

DROP TABLE IF EXISTS `Grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Grades` (
  `Grade` char(25) NOT NULL,
  `ChargeTP` double DEFAULT NULL,
  `ChargeC` double DEFAULT NULL,
  `ChargeTD` double DEFAULT NULL,
  `GradeArab` char(25) DEFAULT NULL,
  `ChargeCI` double DEFAULT NULL,
  `ChargeTotal` double DEFAULT NULL,
  PRIMARY KEY (`Grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Grades`
--

LOCK TABLES `Grades` WRITE;
/*!40000 ALTER TABLE `Grades` DISABLE KEYS */;
INSERT INTO `Grades` VALUES ('A',3.5,4,3,'أ',2.5,16);
/*!40000 ALTER TABLE `Grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Inscriptions`
--

DROP TABLE IF EXISTS `Inscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `NumIns` int NOT NULL AUTO_INCREMENT,
  `Remarque` char(20) DEFAULT NULL,
  `Sitfin` char(20) DEFAULT NULL,
  `Montant` decimal(18,0) DEFAULT NULL,
  `NoteSO` double DEFAULT NULL,
  `NoteST` double DEFAULT NULL,
  PRIMARY KEY (`NumIns`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Inscriptions`
--

LOCK TABLES `Inscriptions` WRITE;
/*!40000 ALTER TABLE `Inscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `Inscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Jours`
--

DROP TABLE IF EXISTS `Jours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Jours` (
  `N` int NOT NULL,
  `Lundi` char(10) DEFAULT NULL,
  `Mardi` char(10) DEFAULT NULL,
  `Mercredi` char(10) DEFAULT NULL,
  `Jeudi` char(10) DEFAULT NULL,
  `Vendredi` char(10) DEFAULT NULL,
  `Samedi` char(10) DEFAULT NULL,
  `CodeProf` smallint DEFAULT NULL,
  PRIMARY KEY (`N`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Jours`
--

LOCK TABLES `Jours` WRITE;
/*!40000 ALTER TABLE `Jours` DISABLE KEYS */;
/*!40000 ALTER TABLE `Jours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Matieres`
--

DROP TABLE IF EXISTS `Matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `DateFin` datetime DEFAULT NULL,
  PRIMARY KEY (`CodeMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Matieres`
--

LOCK TABLES `Matieres` WRITE;
/*!40000 ALTER TABLE `Matieres` DISABLE KEYS */;
/*!40000 ALTER TABLE `Matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OptionNiveau`
--

DROP TABLE IF EXISTS `OptionNiveau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `OptionNiveau` (
  `OptionNiveau` char(55) NOT NULL,
  `Niveau` char(12) NOT NULL,
  PRIMARY KEY (`OptionNiveau`,`Niveau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OptionNiveau`
--

LOCK TABLES `OptionNiveau` WRITE;
/*!40000 ALTER TABLE `OptionNiveau` DISABLE KEYS */;
/*!40000 ALTER TABLE `OptionNiveau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Options`
--

DROP TABLE IF EXISTS `Options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Options` (
  `Option` char(55) NOT NULL,
  `Departement` char(55) DEFAULT NULL,
  `OptionAraB` char(55) DEFAULT NULL,
  `CodeOption` int DEFAULT NULL,
  PRIMARY KEY (`Option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Options`
--

LOCK TABLES `Options` WRITE;
/*!40000 ALTER TABLE `Options` DISABLE KEYS */;
/*!40000 ALTER TABLE `Options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prof`
--

DROP TABLE IF EXISTS `Prof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Prof` (
  `MatriculeProf` int NOT NULL,
  `nom` char(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`MatriculeProf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prof`
--

LOCK TABLES `Prof` WRITE;
/*!40000 ALTER TABLE `Prof` DISABLE KEYS */;
INSERT INTO `Prof` VALUES (123456,'Professor Name');
/*!40000 ALTER TABLE `Prof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ProfSituation`
--

DROP TABLE IF EXISTS `ProfSituation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ProfSituation` (
  `CodeProf` int NOT NULL,
  `Sess` int NOT NULL,
  `Situation` varchar(35) DEFAULT NULL,
  `Grade` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`CodeProf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ProfSituation`
--

LOCK TABLES `ProfSituation` WRITE;
/*!40000 ALTER TABLE `ProfSituation` DISABLE KEYS */;
INSERT INTO `ProfSituation` VALUES (123456,1,'New Situation','A');
/*!40000 ALTER TABLE `ProfSituation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RatVol`
--

DROP TABLE IF EXISTS `RatVol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `RatVol` (
  `NumRatV` int NOT NULL AUTO_INCREMENT,
  `MatProf` smallint NOT NULL,
  `DateRat` datetime NOT NULL,
  `Seance` char(10) NOT NULL,
  `Session` int NOT NULL,
  `Salle` char(10) NOT NULL,
  `Jour` char(10) NOT NULL,
  `CodeClasse` char(9) DEFAULT NULL,
  `CodeMatiere` char(10) DEFAULT NULL,
  `Etat` bit(1) NOT NULL,
  PRIMARY KEY (`NumRatV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RatVol`
--

LOCK TABLES `RatVol` WRITE;
/*!40000 ALTER TABLE `RatVol` DISABLE KEYS */;
/*!40000 ALTER TABLE `RatVol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SEANCES`
--

DROP TABLE IF EXISTS `SEANCES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SEANCES` (
  `SEANCE` char(3) NOT NULL,
  `Horaire` char(13) DEFAULT NULL,
  `HDeb` char(10) DEFAULT NULL,
  `HFin` char(10) DEFAULT NULL,
  PRIMARY KEY (`SEANCE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SEANCES`
--

LOCK TABLES `SEANCES` WRITE;
/*!40000 ALTER TABLE `SEANCES` DISABLE KEYS */;
/*!40000 ALTER TABLE `SEANCES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Semaine`
--

DROP TABLE IF EXISTS `Semaine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Semaine` (
  `NumSem` int NOT NULL AUTO_INCREMENT,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `Session` int NOT NULL,
  PRIMARY KEY (`NumSem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Semaine`
--

LOCK TABLES `Semaine` WRITE;
/*!40000 ALTER TABLE `Semaine` DISABLE KEYS */;
/*!40000 ALTER TABLE `Semaine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Session`
--

DROP TABLE IF EXISTS `Session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `SemAb` char(1) DEFAULT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Session`
--

LOCK TABLES `Session` WRITE;
/*!40000 ALTER TABLE `Session` DISABLE KEYS */;
INSERT INTO `Session` VALUES (1,'2023','1','2023-11-25 09:00:00','2023-11-25 17:00:00','2023-11-25 09:00:00','2023-11-25 17:00:00','2024','2025','2');
/*!40000 ALTER TABLE `Session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Situation`
--

DROP TABLE IF EXISTS `Situation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Situation` (
  `SituationID` int NOT NULL,
  `SituationName` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`SituationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Situation`
--

LOCK TABLES `Situation` WRITE;
/*!40000 ALTER TABLE `Situation` DISABLE KEYS */;
INSERT INTO `Situation` VALUES (1,'New Situation');
/*!40000 ALTER TABLE `Situation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TypeLocal`
--

DROP TABLE IF EXISTS `TypeLocal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TypeLocal` (
  `TypeLocal` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Gategorie` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`TypeLocal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TypeLocal`
--

LOCK TABLES `TypeLocal` WRITE;
/*!40000 ALTER TABLE `TypeLocal` DISABLE KEYS */;
/*!40000 ALTER TABLE `TypeLocal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sess`
--

DROP TABLE IF EXISTS `sess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `SemAb` char(10) DEFAULT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sess`
--

LOCK TABLES `sess` WRITE;
/*!40000 ALTER TABLE `sess` DISABLE KEYS */;
/*!40000 ALTER TABLE `sess` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS Prof;

-- Create the new Prof table with the updated structure
CREATE TABLE Prof (
Matricule Prof smallint NOT NULL,
Nom char(50) NULL,
Prénom char(50) NULL,
CIN ou Passeport char(15) NULL,
Identifiant CNRPS char(15) NULL,
Date de naissance DATETIME NULL,
Nationalité char(20) NULL,
Sexe (M/F) char(1) NULL,
Date  Ent Adm DATETIME NULL,
Date Ent Etbs DATETIME NULL,
Diplôme char(30) NULL,
Adresse char(50) NULL,
Ville char(50) NULL,
Code postal smallint NULL,
N° Téléphone char(16) NULL,
Grade char(25) NULL,
Date de nomination dans le grade DATETIME NULL,
Date de titulirisation DATETIME NULL,
N° Poste char(10) NULL,
Département char(55) NULL,
Situation char(35) NULL,
Spécialité char(35) NULL,
N° de Compte char(30) NULL,
Banque char(15) NULL,
Agence char(35) NULL,
Adr pendant les vacances char(50) NULL,
Tél pendant les vacances char(16) NULL,
Lieu de naissance char(25) NULL,
Début du Contrat DATETIME NULL,
Fin du Contrat DATETIME NULL,
Type de Contrat char(5) NULL,
NB contrat ISETSOUSSE tinyint NULL,
NB contrat Autre Etb char(10) NULL,
Bureau char(10) NULL,
Email char(60) NULL,
Email Interne char(60) NULL,
NomArabe char(35) NULL,
PrenomArabe char(25) NULL,
LieuNaisArabe char(20) NULL,
AdresseArabe char(50) NULL,
VilleArabe char(25) NULL,
Disponible char(10) NULL DEFAULT 'oui',
SousSP char(35) NULL,
EtbOrigine char(50) NULL,
TypeEnsg char(30) NULL,
ControlAcces char(11) NULL,
PRIMARY KEY (Matricule Prof)
);

CREATE TABLE `jssd` (
  `Jour` char(10) NOT NULL,
  `Séance` char(3) NOT NULL,
  `Salle` char(10) NOT NULL,
  `NDist` int(11) NOT NULL,
  `Groupe` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
ALTER TABLE `jssd`
  ADD UNIQUE KEY `unique_combination` (`Jour`,`Séance`,`Salle`,`NDist`,`Groupe`);
COMMIT;
INSERT INTO `jssd` (`Jour`, `Séance`, `Salle`, `NDist`, `Groupe`) VALUES
('lundi', '5', 'gjf2', 100, 'dsi'),
('mardi', '3', 'o7', 789, 'ti1');
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-25 19:39:48
