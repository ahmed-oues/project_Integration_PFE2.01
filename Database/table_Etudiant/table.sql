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
INSERT INTO Classe (CodClasse, IntClasse, Departement, ClassOption, Niveau, IntCalsseArabB, OptionAaraB, DepartementAaraB, NiveauAaraB, CodeEtape, CodeSalima)
VALUES 
    ('CL002', 'Physics A', 'Physics Department', 'Quantum Physics', 'Undergraduate', 'Arabic Class B', 'Physics Arabic', 'Physics Arabic Department', 'Undergraduate Arabic', 'PH101', 'SAL002'),
    ('CL003', 'Mathematics A', 'Mathematics Department', 'Pure Mathematics', 'Undergraduate', 'Arabic Class C', 'Mathematics Arabic', 'Mathematics Arabic Department', 'Undergraduate Arabic', 'MA101', 'SAL003');
INSERT INTO Classe (CodClasse, IntClasse, Departement, ClassOption, Niveau, IntCalsseArabB, OptionAaraB, DepartementAaraB, NiveauAaraB, CodeEtape, CodeSalima)
VALUES ('CL001', 'Computer Science A', 'Computer Science Department', 'Programming', 'Underg', 'Arabic Class A', 'Programming Arabic', 'Computer Science Arabic', 'Undergr', 'CS101', 'SAL001');
