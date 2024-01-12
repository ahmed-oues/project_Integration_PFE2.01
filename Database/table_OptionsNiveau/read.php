<?php
include 'connection_db.php';

$sql = "SELECT * FROM OptioNiveau";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>Option</th>
<th>Niveau</th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['Option'] . "</td>";
    echo "<td>" . $row['Niveau'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
