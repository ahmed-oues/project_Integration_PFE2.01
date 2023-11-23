<?php
include "connection.php"; 

$sql = "SELECT * FROM TypeLocal";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>TypeLocal Dashboard</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">TypeLocal Dashboard</h1>
        <a href="create.php" class="btn btn-primary mb-3">Create TypeLocal</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>TypeLocal</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['TypeLocal'] . "</td>";
                        echo "<td>" . $row['Gategorie'] . "</td>";
                        echo "<td>";
                        echo '<a href="update.php?TypeLocal=' . $row['TypeLocal'] . '" class="btn btn-warning btn-sm">Update</a>';
                        echo ' <a href="delete.php?TypeLocal=' . $row['TypeLocal'] . '" class="btn btn-danger btn-sm">Delete</a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
