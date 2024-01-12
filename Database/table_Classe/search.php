<?php
include "db_con.php";

if (isset($_GET['search'])) {
  $search = $_GET['search'];

  $sql = "SELECT * FROM `classe` WHERE CodClasse LIKE '%$search%'";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    echo "Failed: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ... (Your existing header code) ... -->
  <title>Projet d'integration - Search Results</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Projet d'integration
  </nav>

  <div class="container">
    <h3 class="mb-3">Search Results</h3>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Code de Classe</th>
          <th scope="col">Intitulé de Classe</th>
          <th scope="col">Département</th>
          <th scope="col">Option</th>
          <th scope="col">Niveau</th>
          <th scope="col">Intitulé de Classe (Arabe)</th>
          <th scope="col">Option (Arabe)</th>
          <th scope="col">Département (Arabe)</th>
          <th scope="col">Niveau (Arabe)</th>
          <th scope="col">Code Etape</th>
          <th scope="col">Code Salima</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["CodClasse"] ?></td>
            <td><?php echo $row["IntClasse"] ?></td>
            <td><?php echo $row["Département"] ?></td>
            <td><?php echo $row["Optionc"] ?></td>
            <td><?php echo $row["Niveau"] ?></td>
            <td><?php echo $row["IntCalsseArabB"] ?></td>
            <td><?php echo $row["OptionAaraB"] ?></td>
            <td><?php echo $row["DepartementAaraB"] ?></td>
            <td><?php echo $row["NiveauAaraB"] ?></td>
            <td><?php echo $row["CodeEtape"] ?></td>
            <td><?php echo $row["CodeSalima"] ?></td>
            <td>
              <a href="edit.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- ... (Your existing Bootstrap and other scripts) ... -->

</body>

</html>
