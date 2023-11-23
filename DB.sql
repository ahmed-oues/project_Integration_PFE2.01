CREATE TABLE ProfSituation (
    CodeProf INT NOT NULL PRIMARY KEY,
    Sess INT NOT NULL,
    Situation VARCHAR(35) NULL,
    Grade VARCHAR(25) NULL
);

CREATE TABLE Session (
    Numero INT NOT NULL PRIMARY KEY,
    Annee CHAR(5) NOT NULL,
    Sem CHAR(1) NOT NULL,
    Debut DATETIME NULL,
    Fin DATETIME NULL,
    Debsem DATETIME NULL,
    Finsem DATETIME NULL,
    Annea CHAR(5) NULL,
    Anneab CHAR(5) NULL,
    SemAb CHAR NULL
);

CREATE TABLE Gouvernorats (
    Gouv VARCHAR(20) PRIMARY KEY,
    CodPostal INT NOT NULL
);

CREATE TABLE RatVol (
    NumRatV INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    MatProf SMALLINT NOT NULL,
    DateRat DATETIME NOT NULL,
    Seance CHAR(10) NOT NULL,
    Session INT NOT NULL,
    Salle CHAR(10) NOT NULL,
    Jour CHAR(10) NOT NULL,
    CodeClasse CHAR(9) DEFAULT NULL,
    CodeMatiere CHAR(10) DEFAULT NULL,
    Etat BIT(1) NOT NULL
);


CREATE TABLE Classe (
    CodClasse CHAR(9) NOT NULL,
    IntClasse CHAR(60) NULL,
    Departement CHAR(55) NULL,
    ClassOption CHAR(55) NULL, 
    Niveau CHAR(12) NULL,
    IntCalsseArabB CHAR(60) NULL,
    OptionAaraB CHAR(55) NULL,
    DepartementAaraB CHAR(55) NULL,
    NiveauAaraB CHAR(10) NULL,
    CodeEtape VARCHAR(8) NULL,
    CodeSalima NVARCHAR(15) NULL,
    PRIMARY KEY (CodClasse)
);

CREATE TABLE Etudiant (
    Nom CHAR(25) NULL,
    DateNais DATETIME NULL,
    NCIN CHAR(10) NOT NULL UNIQUE,
    NCE CHAR(15) NULL,
    TypBac CHAR(20) NULL,
    Prenom CHAR(25) NULL,
    Sexe INT NULL,
    LieuNais CHAR(60) NULL,
    Adresse CHAR(100) NULL,
    Ville CHAR(30) NULL,
    CodePostal SMALLINT NULL,
    NTel CHAR(10) NULL,
    CodClasse CHAR(9) NULL,
    DecisionduConseil CHAR(12) NULL,
    AnneeUnversitaire CHAR(5) NULL,
    Semestre TINYINT NULL,
    Dispenser INT NOT NULL,
    Anneesopt DATETIME NULL,
    DatePremiereInscp DATETIME NULL,
    Gouvernorat CHAR(12) NULL,
    MentionduBac CHAR(12) NULL,
    Nationalite CHAR(25) NULL,
    CodeCNSS CHAR(3) NULL,
    NomArabe CHAR(25) NULL,
    PrenomArabe CHAR(25) NULL,
    LieuNaisArabe CHAR(60) NULL,
    AdresseArabe CHAR(100) NULL,
    VilleArabe CHAR(30) NULL,
    GouvernoratArabe CHAR(15) NULL,
    TypeBacAB CHAR(15) NULL,
    Photo CHAR(10) NULL,
    Origine CHAR(20) NULL,
    SituationDpart CHAR(25) NULL,
    NBAC CHAR(12) NULL,
    Redaut TINYINT NULL,
    PRIMARY KEY (NCIN)
);
CREATE TABLE OptionNiveau (
    OptionNiveau CHAR(55) NOT NULL,
    Niveau CHAR(12) NOT NULL,
    CONSTRAINT PK_OptionNiveau PRIMARY KEY NONCLUSTERED (OptionNiveau, Niveau)
);

CREATE TABLE Matieres (
    CodeMatiere CHAR(10) NOT NULL,
    NomMatiere CHAR(50) NULL,
    CoefMatiere FLOAT NULL,
    Departement CHAR(55) NULL,
    Semestre CHAR(12) NULL,
    OptionMatiere CHAR(55) NULL,
    NbHeureCI REAL NULL,
    NbHeureTP REAL NULL,
    TypeLabo CHAR(13) NULL,
    Bonus REAL NULL,
    Categories CHAR(35) NULL,
    SousCategories CHAR(35) NULL,
    DateDeb DATETIME NULL,
    DateFin DATETIME NULL,
    PRIMARY KEY (CodeMatiere)
);


CREATE TABLE Departements (
    Département CHAR(55) NOT NULL,
    Responsable CHAR(50) NULL,
    MatProf CHAR(10) NULL,
    DepartementARAB CHAR(55) NULL,
    CodeDep CHAR(2) PRIMARY KEY
);

CREATE TABLE Jours (
    N INT NOT NULL,
    Lundi CHAR(10) NULL,
    Mardi CHAR(10) NULL,
    Mercredi CHAR(10) NULL,
    Jeudi CHAR(10) NULL,
    Vendredi CHAR(10) NULL,
    Samedi CHAR(10) NULL,
    CodeProf SMALLINT NULL,
    CONSTRAINT PK_Jours PRIMARY KEY NONCLUSTERED (N)
);
 --Corrected SQL DB (Working with mysqli)   
CREATE TABLE Options (
    `Option` CHAR(55) NOT NULL,
    Departement CHAR(55) NULL,
    OptionAraB CHAR(55) NULL,
    CodeOption INT NULL,
    PRIMARY KEY (`Option`)
);


CREATE TABLE TypeLocal (
    TypeLocal NVARCHAR(25) NOT NULL,
    Gategorie NVARCHAR(25) NULL,
    CONSTRAINT PK_TypeLocal PRIMARY KEY CLUSTERED (TypeLocal)
);
CREATE TABLE SEANCES (
    SEANCE CHAR(3) NOT NULL,
    Horaire CHAR(13) NULL,
    HDeb CHAR(10) NULL,
    HFin CHAR(10) NULL,
    CONSTRAINT PK_SEANCES PRIMARY KEY NONCLUSTERED (SEANCE)
);

CREATE TABLE sess (
    Numero INT NOT NULL,
    Annee CHAR(5) NULL,
    Sem CHAR(1) NULL,
    Debut DATETIME NULL,
    Fin DATETIME NULL,
    Debsem DATETIME NULL,
    Finsem DATETIME NULL,
    NSemSesdeb INT NOT NULL,
    NSemSesFin INT NOT NULL,
    Ann4 CHAR(9) NULL,
    Ann4ab CHAR(9) NULL,
    SemAb CHAR(10) NULL,
    CONSTRAINT PK_sess PRIMARY KEY NONCLUSTERED (Numero)
);

CREATE TABLE Grades (
    Grade CHAR(25) NOT NULL,
    ChargeTP REAL NULL,
    ChargeC REAL NULL,
    ChargeTD REAL NULL,
    GradeArab CHAR(25) NULL,
    ChargeCI REAL NULL,
    ChargeTotal REAL NULL,
    CONSTRAINT PK_Grades PRIMARY KEY NONCLUSTERED (Grade)
);

CREATE TABLE Semaine (
    NumSem INT NOT NULL,
    DateDebut DATETIME NULL,
    DateFin DATETIME NULL,
    Session INT NOT NULL,
    PRIMARY KEY (NumSem)
);

CREATE TABLE Inscriptions (
    CodeClasse CHAR(9) NOT NULL,
    MatEtud CHAR(10) NOT NULL,
    Session INT NOT NULL,
    DateInscription DATETIME NULL,
    DecisionConseil CHAR(12) DEFAULT '*****',
    Rachat TINYINT NOT NULL DEFAULT 0,
    MoyGen REAL NULL,
    Dispense TINYINT NOT NULL DEFAULT 0,
    TauxAbsences FLOAT NULL,
    Redouble TINYINT NOT NULL DEFAULT 0,
    StOuv VARCHAR(20) NULL,
    StTech CHAR(20) NULL,
    TypeInscrip CHAR(7) DEFAULT 'NR',
    MontantIns CHAR(13) NULL,
    NumIns INT AUTO_INCREMENT NOT NULL,
    Remarque CHAR(20) NULL,
    Sitfin CHAR(20) NULL,
    Montant NUMERIC(18, 0) NULL,
    NoteSO REAL NULL,
    NoteST REAL NULL,
    PRIMARY KEY (NumIns)
);


CREATE TABLE DossierEtud (
    Ndossier BIGINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Motif NVARCHAR(50) NULL,
    MatEtud CHAR(10) NULL,
    TypePiece INT NULL,
    DatePiece DATETIME NULL,
    Session INT NULL,
    nomfichierpiece VARCHAR(50) NULL
);


