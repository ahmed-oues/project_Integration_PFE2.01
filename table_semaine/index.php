<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Semaine</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <a href="create.php" class="btn btn-primary">Ajouter Semaine</a>
    <a href="recherche.php" class="btn btn-primary">Recherche</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Numéro de la semaine</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Session</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "db_conn.php";

                $sql = "SELECT * FROM semaine";
                $res = $conn->query($sql);

                if (!$res) {
                    die("Invalid query " . $conn->error);
                }

                while ($row = $res->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[NumSem]</td>
                        <td>$row[DateDebut]</td>
                        <td>$row[DateFin]</td>
                        <td>$row[Session]</td>
                        <td>
                            <a href='edit.php?NumSem=$row[NumSem]' class='btn btn-primary'>Edit</a>
                            <a href='delete.php?NumSem=$row[NumSem]' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
