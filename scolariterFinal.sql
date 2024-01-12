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
INSERT INTO `Departements` VALUES ('infoo','rouitbi adnen','124','dep info','1');
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
INSERT INTO `Etudiant` VALUES ('ahmed oueslati','2024-01-24 19:32:00','1121113','123','eco','ss',0,'gaafour','gaafour  siliana','gaafour',6110,'54906119','C001','h','s',3,0,'2024-01-25 19:32:00','2024-01-17 19:32:00','SOUUSEE','bien','kdzok','zd','oueslati','ahmed','djozo','gaafour  siliana','gaafour','zdzdzd','ahh','zdzdzdzd','zdzdzdzdzd','adi','11211',1);
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
-- Table structure for table `HeureSup`
--

DROP TABLE IF EXISTS `HeureSup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `HeureSup` (
  `Session` int NOT NULL,
  `MatProf` smallint NOT NULL,
  `CI` double DEFAULT NULL,
  `TP` double DEFAULT NULL,
  `Tot` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HeureSup`
--

LOCK TABLES `HeureSup` WRITE;
/*!40000 ALTER TABLE `HeureSup` DISABLE KEYS */;
INSERT INTO `HeureSup` VALUES (5,123,1.5,1.5,3),(8,12,2,3,5);
/*!40000 ALTER TABLE `HeureSup` ENABLE KEYS */;
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
  `id` int NOT NULL AUTO_INCREMENT,
  `code_prof` varchar(255) NOT NULL,
  `Session` varchar(255) NOT NULL,
  `Jours` varchar(255) NOT NULL,
  `Seance` varchar(255) NOT NULL,
  `Annee_universaire` varchar(255) NOT NULL,
  `Semestre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Jours`
--

LOCK TABLES `Jours` WRITE;
/*!40000 ALTER TABLE `Jours` DISABLE KEYS */;
INSERT INTO `Jours` VALUES (1,'123','123','vendredi','S1','2042','1');
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
INSERT INTO `Matieres` VALUES ('123','arabc',1,'info',' 5','opt',1,1,'info',1,'info','dsi','2024-02-07 19:37:00','2024-02-10 19:37:00');
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
-- Table structure for table `Piece`
--

DROP TABLE IF EXISTS `Piece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Piece` (
  `Typepiece` int NOT NULL AUTO_INCREMENT,
  `LibPiece` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Typepiece`),
  UNIQUE KEY `LibPiece` (`LibPiece`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Piece`
--

LOCK TABLES `Piece` WRITE;
/*!40000 ALTER TABLE `Piece` DISABLE KEYS */;
INSERT INTO `Piece` VALUES (11,'forneture de buro '),(12,'lidude '),(13,'pass');
/*!40000 ALTER TABLE `Piece` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prof`
--

DROP TABLE IF EXISTS `Prof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Prof` (
  `Matricule Prof` smallint NOT NULL,
  `Nom` char(50) DEFAULT NULL,
  `Prénom` char(50) DEFAULT NULL,
  `CIN ou Passeport` char(15) DEFAULT NULL,
  `Identifiant CNRPS` char(15) DEFAULT NULL,
  `Date de naissance` datetime DEFAULT NULL,
  `Nationalité` char(20) DEFAULT NULL,
  `Sexe (M/F)` char(1) DEFAULT NULL,
  `Date  Ent Adm` datetime DEFAULT NULL,
  `Date Ent Etbs` datetime DEFAULT NULL,
  `Diplôme` char(30) DEFAULT NULL,
  `Adresse` char(50) DEFAULT NULL,
  `Ville` char(50) DEFAULT NULL,
  `Code postal` smallint DEFAULT NULL,
  `N° Téléphone` char(16) DEFAULT NULL,
  `Grade` char(25) DEFAULT NULL,
  `Date de nomination dans le grade` datetime DEFAULT NULL,
  `Date de titulirisation` datetime DEFAULT NULL,
  `N° Poste` char(10) DEFAULT NULL,
  `Département` char(55) DEFAULT NULL,
  `Situation` char(35) DEFAULT NULL,
  `Spécialité` char(35) DEFAULT NULL,
  `N° de Compte` char(30) DEFAULT NULL,
  `Banque` char(15) DEFAULT NULL,
  `Agence` char(35) DEFAULT NULL,
  `Adr pendant les vacances` char(50) DEFAULT NULL,
  `Tél pendant les vacances` char(16) DEFAULT NULL,
  `Lieu de naissance` char(25) DEFAULT NULL,
  `Début du Contrat` datetime DEFAULT NULL,
  `Fin du Contrat` datetime DEFAULT NULL,
  `Type de Contrat` char(5) DEFAULT NULL,
  `NB contrat ISETSOUSSE` tinyint DEFAULT NULL,
  `NB contrat Autre Etb` char(10) DEFAULT NULL,
  `Bureau` char(10) DEFAULT NULL,
  `Email` char(60) DEFAULT NULL,
  `Email Interne` char(60) DEFAULT NULL,
  `NomArabe` char(35) DEFAULT NULL,
  `PrenomArabe` char(25) DEFAULT NULL,
  `LieuNaisArabe` char(20) DEFAULT NULL,
  `AdresseArabe` char(50) DEFAULT NULL,
  `VilleArabe` char(25) DEFAULT NULL,
  `Disponible` char(10) DEFAULT 'oui',
  `SousSP` char(35) DEFAULT NULL,
  `EtbOrigine` char(50) DEFAULT NULL,
  `TypeEnsg` char(30) DEFAULT NULL,
  `ControlAcces` char(11) DEFAULT NULL,
  PRIMARY KEY (`Matricule Prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prof`
--

LOCK TABLES `Prof` WRITE;
/*!40000 ALTER TABLE `Prof` DISABLE KEYS */;
INSERT INTO `Prof` VALUES (123,'oueslati','ahmed','1234567','11211','2023-11-08 14:52:00','tunis','m','2023-11-21 14:52:00','2023-11-28 14:52:00','info','sousee tunisie','sousse',6110,'+21654906119','A','2023-11-21 14:52:00','2023-11-15 14:52:00','1232','info','New Situation','info','1111','zitouna','zitouna','123','33422633','gafour','2023-11-24 14:53:00','2023-11-21 14:53:00','cdd',12,'1231','sousse','ahmed.oueslati6110@gmail.com','ahmed.oueslati6110@gmail.com','aa','aaaa','aaaaa','sousee tunisie','sousse','aaaaaa','aaaaaa','aaaaaaaaa','&&&&','&&&&');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RatVol`
--

LOCK TABLES `RatVol` WRITE;
/*!40000 ALTER TABLE `RatVol` DISABLE KEYS */;
INSERT INTO `RatVol` VALUES (3,123,'2024-01-26 19:31:00','1',1,'g005','22','m55','123',_binary '');
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
-- Table structure for table `Salle`
--

DROP TABLE IF EXISTS `Salle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Salle` (
  `Salle` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Departement` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Categorie` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Responsable` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Charge` tinyint DEFAULT NULL,
  `Nb_place_examen` tinyint DEFAULT NULL,
  `Nb_lignes` tinyint DEFAULT NULL,
  `Nb_col` tinyint DEFAULT NULL,
  `Nb_surv` smallint DEFAULT NULL,
  `Type` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Disponible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Salle`
--

LOCK TABLES `Salle` WRITE;
/*!40000 ALTER TABLE `Salle` DISABLE KEYS */;
INSERT INTO `Salle` VALUES ('LI2.4','Informatique','tp','Mr foulen ',25,25,0,0,0,'TP ',8),('LI2.3','Gestion','laboratoire','Mr felten',26,0,0,0,0,'TP',1);
/*!40000 ALTER TABLE `Salle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Semaine`
--

DROP TABLE IF EXISTS `Semaine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Semaine` (
  `NumSem` int NOT NULL,
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
-- Table structure for table `absensg`
--

DROP TABLE IF EXISTS `absensg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `absensg` (
  `NumAbs` int NOT NULL,
  `MatriculeProf` smallint NOT NULL,
  `Session` int NOT NULL,
  `DateAbs` datetime NOT NULL,
  `Seance` char(10) NOT NULL,
  `Motif` char(60) DEFAULT NULL,
  `TypeSeance` char(10) DEFAULT NULL,
  `CodeClasse` char(9) DEFAULT NULL,
  `CodeMatiere` char(10) DEFAULT NULL,
  `Justifier` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`NumAbs`,`MatriculeProf`,`Session`,`DateAbs`,`Seance`),
  KEY `MatriculeProf` (`MatriculeProf`),
  KEY `CodeClasse` (`CodeClasse`),
  KEY `CodeMatiere` (`CodeMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `absensg`
--

LOCK TABLES `absensg` WRITE;
/*!40000 ALTER TABLE `absensg` DISABLE KEYS */;
INSERT INTO `absensg` VALUES (531967,123,2,'2024-01-04 20:33:00','S1','AD','DA','','ffff',_binary '');
/*!40000 ALTER TABLE `absensg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actionmember`
--

DROP TABLE IF EXISTS `actionmember`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actionmember` (
  `NumAction` int NOT NULL,
  `NumProf` smallint NOT NULL,
  `DatePart` datetime NOT NULL,
  `Qualité` varchar(20) DEFAULT NULL,
  `Dpt` char(55) DEFAULT NULL,
  `Opt` char(55) DEFAULT NULL,
  `Niveau` char(12) DEFAULT NULL,
  `CodeMat` char(10) DEFAULT NULL,
  `Remarque` varchar(30) DEFAULT NULL,
  UNIQUE KEY `NumAction` (`NumAction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actionmember`
--

LOCK TABLES `actionmember` WRITE;
/*!40000 ALTER TABLE `actionmember` DISABLE KEYS */;
INSERT INTO `actionmember` VALUES (12,98,'2023-10-14 00:00:00','kjncdc','kndck jc','knekcnec','lkndck','kdjnck','0'),(45,344,'2023-10-07 00:00:00','kjbdkds','dnczkncz','dnjknzcz','ndkvnjzvdc','kdnkzdv','0');
/*!40000 ALTER TABLE `actionmember` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cellules`
--

DROP TABLE IF EXISTS `cellules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cellules` (
  `NumProf` smallint DEFAULT NULL,
  `NumMat` char(10) DEFAULT NULL,
  `NumCell` int NOT NULL,
  `NumSession` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cellules`
--

LOCK TABLES `cellules` WRITE;
/*!40000 ALTER TABLE `cellules` DISABLE KEYS */;
INSERT INTO `cellules` VALUES (0,'5',1,1),(3,'5',2,1),(3,'5',3,2);
/*!40000 ALTER TABLE `cellules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `classe` (
  `CodClasse` char(9) NOT NULL,
  `IntClasse` char(60) DEFAULT NULL,
  `Département` char(55) DEFAULT NULL,
  `Optionc` char(55) DEFAULT NULL,
  `Niveau` char(12) DEFAULT NULL,
  `IntCalsseArabB` char(60) DEFAULT NULL,
  `OptionAaraB` char(55) DEFAULT NULL,
  `DepartementAaraB` char(55) DEFAULT NULL,
  `NiveauAaraB` char(10) DEFAULT NULL,
  `CodeEtape` varchar(8) DEFAULT NULL,
  `CodeSalima` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`CodClasse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classe`
--

LOCK TABLES `classe` WRITE;
/*!40000 ALTER TABLE `classe` DISABLE KEYS */;
INSERT INTO `classe` VALUES ('3.2','dsi','informatique','info','3','info','oui','informatique','3','764','996'),('3.3','rsi','informatique','cyber','3','reseau','azerty','informatique','3','8778','8779'),('4000','SFR','inforamitque','hhda','3','jdaoj','adz','dazd','3','45454zd','54daz'),('azert','zerg','info','fdfs','aze','aze','aze','aze','zae','241','54');
/*!40000 ALTER TABLE `classe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conges`
--

DROP TABLE IF EXISTS `conges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conges` (
  `NumConge` int NOT NULL AUTO_INCREMENT,
  `MatriculeProf` smallint DEFAULT NULL,
  `DateDeb` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  PRIMARY KEY (`NumConge`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conges`
--

LOCK TABLES `conges` WRITE;
/*!40000 ALTER TABLE `conges` DISABLE KEYS */;
INSERT INTO `conges` VALUES (58,111,'2023-10-10','2023-10-18'),(59,8977,'2023-10-18','2023-11-03'),(60,123,'2024-01-23','2024-01-27');
/*!40000 ALTER TABLE `conges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gouvernorats`
--

DROP TABLE IF EXISTS `gouvernorats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gouvernorats` (
  `Gouv` varchar(255) DEFAULT NULL,
  `CodePostal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gouvernorats`
--

LOCK TABLES `gouvernorats` WRITE;
/*!40000 ALTER TABLE `gouvernorats` DISABLE KEYS */;
INSERT INTO `gouvernorats` VALUES ('Siliana ','6000');
/*!40000 ALTER TABLE `gouvernorats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jssd`
--

DROP TABLE IF EXISTS `jssd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jssd` (
  `Jour` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Séance` char(3) COLLATE utf8mb4_general_ci NOT NULL,
  `Salle` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  `NDist` int NOT NULL,
  `Groupe` char(3) COLLATE utf8mb4_general_ci NOT NULL,
  UNIQUE KEY `unique_combination` (`Jour`,`Séance`,`Salle`,`NDist`,`Groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jssd`
--

LOCK TABLES `jssd` WRITE;
/*!40000 ALTER TABLE `jssd` DISABLE KEYS */;
INSERT INTO `jssd` VALUES ('lundi','5','gjf2',100,'dsi'),('mardi','3','o7',789,'ti1'),('merc','5','g006',122,'ssd');
/*!40000 ALTER TABLE `jssd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matieres` (
  `Code_Matiere` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Nom_Matiere` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Coef_Matiere` float DEFAULT NULL,
  `Departement` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Semestre` varchar(12) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Options` varchar(55) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Nb_Heure_CI` double DEFAULT NULL,
  `Nb_Heure_TP` double DEFAULT NULL,
  `TypeLabo` varchar(13) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Bonus` double DEFAULT NULL,
  `Categories` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SousCategories` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateDeb` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `PK_Matieres` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`PK_Matieres`),
  UNIQUE KEY `Code_Matiere` (`Code_Matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES ('ffff','dd',0,'',' ','',0,0,'',0,'','','0000-00-00 00:00:00','0000-00-00 00:00:00',2),('555','ffff',0,'s',' s','ss',0,0,'',0,'','','0000-00-00 00:00:00','0000-00-00 00:00:00',10),('fs','',0,'',' ','',0,0,'',0,'','','0000-00-00 00:00:00','0000-00-00 00:00:00',12),('vvv','ffff',0,'',' ','',0,0,'',0,'','','0000-00-00 00:00:00','0000-00-00 00:00:00',15),('fsh','',0,'',' ','',0,0,'',1,'','','2023-11-19 19:10:00','2023-11-22 19:10:00',16),('py','python',1,'info',' 1','oui',2,2,'ti1.4',1,'coding','langauge','2023-11-21 16:21:00','2023-11-30 16:21:00',17);
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modifgrade`
--

DROP TABLE IF EXISTS `modifgrade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modifgrade` (
  `NGmodif` int NOT NULL AUTO_INCREMENT,
  `Grade` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `DateNomin` datetime NOT NULL,
  `MatProf` smallint NOT NULL,
  PRIMARY KEY (`NGmodif`,`Grade`,`DateNomin`,`MatProf`),
  UNIQUE KEY `UC_Grade` (`Grade`),
  UNIQUE KEY `UC_DateNomin` (`DateNomin`),
  UNIQUE KEY `UC_MatProf` (`MatProf`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modifgrade`
--

LOCK TABLES `modifgrade` WRITE;
/*!40000 ALTER TABLE `modifgrade` DISABLE KEYS */;
INSERT INTO `modifgrade` VALUES (11,'etudiant','2023-11-13 00:00:00',3),(9,'ens','2023-11-09 00:00:00',4),(12,'A','2024-01-15 00:00:00',123);
/*!40000 ALTER TABLE `modifgrade` ENABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-12 21:02:34
