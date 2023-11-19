<!DOCTYPE html>
<html lang="en">
<head><style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555; 
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>CodeProf</th>
            <th>Sess</th>
            <th>Situation</th>
            <th>Grade</th>
        </tr>





<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    $sess = $_POST["Sess"];
    $situation = $_POST["Situation"];
    $grade = $_POST["Grade"];

    if (!empty($code)) {
        // Retrieve all the grades for a specific code
        $query = "SELECT * FROM profsituation WHERE CodeProf = '$code'";
    } elseif (!empty($grade)) {
        // Retrieve all the codes for a specific grade
        $query = "SELECT * FROM profsituation WHERE Grade = '$grade'";
    } else {
        // Construct a query based on multiple criteria
        $query = "SELECT * FROM profsituation WHERE 1";

        if (!empty($code)) {
            $query .= " AND CodeProf = '$code'";
        }

        if (!empty($sess)) {
            $query .= " AND Sess = '$sess'";
        }

        if (!empty($situation)) {
            $query .= " AND Situation = '$situation'";
        }
 
        if (!empty($grade)) {
            $query .= " AND Grade = '$grade'";
        }    
    }

    $checkResult = mysqli_query($conn, $query);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "Results:<br>";

        while ($row = mysqli_fetch_assoc($checkResult)) {
            echo "<tr>";
                echo "<td>" . $row["CodeProf"] . "</td>";
                echo "<td>" . $row["Sess"] . "</td>";
                echo "<td>" . $row["Situation"] . "</td>";
                echo "<td>" . $row["Grade"] . "</td>";
                echo "</tr>";
        }
    } else {
        echo "No results found for the criteria.";
    }

    mysqli_close($conn);
}
?>
</body>
</html>