<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de professeurs par date de fin de contrat</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f5f9;
            padding: 20px;
        }

        h1, h2 {
            color: #2c3e50;
        }

        form {
            max-width: 400px;
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #3498db;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>



<?php
require "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateFinRecherche = $_POST['dateFinRecherche']; // La date que je vais l'entree

    // Requête SQL pour récupérer les informations des professeurs avec une date de fin après la date recherchée
    $sql = "SELECT * FROM Prof WHERE `Fin du Contrat` > :dateFinRecherche";
    $stmt = $idcon->prepare($sql);
    $stmt->bindParam(':dateFinRecherche', $dateFinRecherche);
    $stmt->execute();

    // Récupérer les résultats de la requête
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo '<table border="1">
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
                    <th>Nom Arabe</th>
                    <th>Prénom Arabe</th>
                    <th>LieuNais Arabe</th>
                    <th>Adresse Arabe</th>
                    <th>Ville Arabe</th>
                    <th>Disponible</th>
                    <th>SousSP</th>
                    <th>Etb Origine</th>
                    <th>TypeEnsg</th>
                    <th>ControlAcces</th>
                </tr>';
    
        foreach ($result as $professeur) {
            echo '<tr>';
            echo '<td>' . $professeur['Matricule Prof'] . '</td>';
            echo '<td>' . $professeur['Nom'] . '</td>';
            echo '<td>' . $professeur['Prénom'] . '</td>';
            echo '<td>' . $professeur['CIN ou Passeport'] . '</td>';
            echo '<td>' . $professeur['Identifiant CNRPS'] . '</td>';
            echo '<td>' . $professeur['Date de naissance'] . '</td>';
            echo '<td>' . $professeur['Nationalité'] . '</td>';
            echo '<td>' . $professeur['Sexe (M/F)'] . '</td>';
            echo '<td>' . $professeur['Date Ent Adm'] . '</td>';
            echo '<td>' . $professeur['Date Ent Etbs'] . '</td>';
            echo '<td>' . $professeur['Diplôme'] . '</td>';
            echo '<td>' . $professeur['Adresse'] . '</td>';
            echo '<td>' . $professeur['Ville'] . '</td>';
            echo '<td>' . $professeur['Code postal'] . '</td>';
            echo '<td>' . $professeur['N° Téléphone'] . '</td>';
            echo '<td>' . $professeur['Grade'] . '</td>';
            echo '<td>' . $professeur['Date de nomination dans le grade'] . '</td>';
            echo '<td>' . $professeur['Date de titulirisation'] . '</td>';
            echo '<td>' . $professeur['N° Poste'] . '</td>';
            echo '<td>' . $professeur['Département'] . '</td>';
            echo '<td>' . $professeur['Situation'] . '</td>';
            echo '<td>' . $professeur['Spécialité'] . '</td>';
            echo '<td>' . $professeur['N° de Compte'] . '</td>';
            echo '<td>' . $professeur['Banque'] . '</td>';
            echo '<td>' . $professeur['Agence'] . '</td>';
            echo '<td>' . $professeur['Adr pendant les vacances'] . '</td>';
            echo '<td>' . $professeur['Tél pendant les vacances'] . '</td>';
            echo '<td>' . $professeur['Lieu de naissance'] . '</td>';
            echo '<td>' . $professeur['Début du Contrat'] . '</td>';
            echo '<td>' . $professeur['Fin du Contrat'] . '</td>';
            echo '<td>' . $professeur['Type de Contrat'] . '</td>';
            echo '<td>' . $professeur['NB contrat ISETSOUSSE'] . '</td>';
            echo '<td>' . $professeur['NB contrat Autre Etb'] . '</td>';
            echo '<td>' . $professeur['Bureau'] . '</td>';
            echo '<td>' . $professeur['Email'] . '</td>';
            echo '<td>' . $professeur['Email Interne'] . '</td>';
            echo '<td>' . $professeur['NomArabe'] . '</td>';
            echo '<td>' . $professeur['PrenomArabe'] . '</td>';
            echo '<td>' . $professeur['LieuNaisArabe'] . '</td>';
            echo '<td>' . $professeur['AdresseArabe'] . '</td>';
            echo '<td>' . $professeur['VilleArabe'] . '</td>';
            echo '<td>' . $professeur['Disponible'] . '</td>';
            echo '<td>' . $professeur['SousSP'] . '</td>';
            echo '<td>' . $professeur['EtbOrigine'] . '</td>';
            echo '<td>' . $professeur['TypeEnsg'] . '</td>';
            echo '<td>' . $professeur['ControlAcces'] . '</td>';

            echo '</tr>';
        }
    
        echo '</table>';
    } else {
        echo "Aucun professeur trouvé avec une date de fin de contrat après : " . $dateFinRecherche;
    }
    
}
?>
