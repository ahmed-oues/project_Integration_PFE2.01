<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f5f9;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            display: flex;
        }

        .button-container a,
        .button-container button {
            margin-right: 5px;
            padding: 5px 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
            border: none;
        }

        .center-button {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .center-button a,
        .center-button button {
            
            margin-right: 5px;
            padding: 5px 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
            border: none;
           
        }


        
    </style>
</head>
<body>

    <h1>Tableau de bord</h1>

    <?php
    include 'db_connection.php'; 

    $query = "SELECT * FROM prof";
    $result = $idcon->query($query);

    if ($result) {
    ?>
    <table>
        <tr>
            <th>Matricule Prof</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>CIN ou Passeport</th>
            <th>Identifiant CNRPS</th>
            <th>Date de naissance</th>
            <th>Nationalité</th>
            <th>Sexe (M/F)</th>
            <th>Date Ent Adm</th>
            <th>Date Ent Etbs</th>
            <th>Diplôme</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code postal</th>
            <th>N° Téléphone</th>
            <th>Grade</th>
            <th>Date de nomination dans le grade</th>
            <th>Date de titulirisation</th>
            <th>N° Poste</th>
            <th>Département</th>
            <th>Situation</th>
            <th>Spécialité</th>
            <th>N° de Compte</th>
            <th>Banque</th>
            <th>Agence</th>
            <th>Adr pendant les vacances</th>
            <th>Tél pendant les vacances</th>
            <th>Lieu de naissance</th>
            <th>Début du Contrat</th>
            <th>Fin du Contrat</th>
            <th>Type de Contrat</th>
            <th>NB contrat ISETSOUSSE</th>
            <th>NB contrat Autre Etb</th>
            <th>Bureau</th>
            <th>Email</th>
            <th>Email Interne</th>
            <th>NomArabe</th>
            <th>PrenomArabe</th>
            <th>LieuNaisArabe</th>
            <th>AdresseArabe</th>
            <th>VilleArabe</th>
            <th>Disponible</th>
            <th>SousSP</th>
            <th>EtbOrigine</th>
            <th>TypeEnsg</th>
            <th>ControlAcces</th>
        </tr>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['Matricule Prof']; ?></td>
                <td><?php echo $row['Nom']; ?></td>
                <td><?php echo $row['Prénom']; ?></td>
                <td><?php echo $row['CIN ou Passeport']; ?></td>
                <td><?php echo $row['Identifiant CNRPS']; ?></td>
                <td><?php echo $row['Date de naissance']; ?></td>
                <td><?php echo $row['Nationalité']; ?></td>
                <td><?php echo $row['Sexe (M/F)']; ?></td>
                <td><?php echo $row['Date Ent Adm']; ?></td>
                <td><?php echo $row['Date Ent Etbs']; ?></td>
                <td><?php echo $row['Diplôme']; ?></td>
                <td><?php echo $row['Adresse']; ?></td>
                <td><?php echo $row['Ville']; ?></td>
                <td><?php echo $row['Code postal']; ?></td>
                <td><?php echo $row['N° Téléphone']; ?></td>
                <td><?php echo $row['Grade']; ?></td>
                <td><?php echo $row['Date de nomination dans le grade']; ?></td>
                <td><?php echo $row['Date de titulirisation']; ?></td>
                <td><?php echo $row['N° Poste']; ?></td>
                <td><?php echo $row['Département']; ?></td>
                <td><?php echo $row['Situation']; ?></td>
                <td><?php echo $row['Spécialité']; ?></td>
                <td><?php echo $row['N° de Compte']; ?></td>
                <td><?php echo $row['Banque']; ?></td>
                <td><?php echo $row['Agence']; ?></td>
                <td><?php echo $row['Adr pendant les vacances']; ?></td>
                <td><?php echo $row['Tél pendant les vacances']; ?></td>
                <td><?php echo $row['Lieu de naissance']; ?></td>
                <td><?php echo $row['Début du Contrat']; ?></td>
                <td><?php echo $row['Fin du Contrat']; ?></td>
                <td><?php echo $row['Type de Contrat']; ?></td>
                <td><?php echo $row['NB contrat ISETSOUSSE']; ?></td>
                <td><?php echo $row['NB contrat Autre Etb']; ?></td>
                <td><?php echo $row['Bureau']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Email Interne']; ?></td>
                <td><?php echo $row['NomArabe']; ?></td>
                <td><?php echo $row['PrenomArabe']; ?></td>
                <td><?php echo $row['LieuNaisArabe']; ?></td>
                <td><?php echo $row['AdresseArabe']; ?></td>
                <td><?php echo $row['VilleArabe']; ?></td>
                <td><?php echo $row['Disponible']; ?></td>
                <td><?php echo $row['SousSP']; ?></td>
                <td><?php echo $row['EtbOrigine']; ?></td>
                <td><?php echo $row['TypeEnsg']; ?></td>
                <td><?php echo $row['ControlAcces']; ?></td>
                <td class="button-container">
                    <a href="Update.html">MODIFIER</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="center-button">
        <button onclick="location.href='Create.html'" class="button-container">Ajouter un Professeur</button>
        <button onclick="location.href='Delete.html'" class="button-container">Supprimer un Professeur</button>
        <button onclick="location.href='SearchDepartment.php'" class="button-container">Chercher Un Departement</button>
        <button onclick="location.href='SearchDate.html'" class="button-container">Chercher Un Date</button>


    </div>
    <?php
    } else {
        echo "Query execution failed: " . $idcon->errorInfo()[2];
    }
    ?>

</body>
</html>
