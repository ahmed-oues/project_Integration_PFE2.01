<?php
include "db_con.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ... (Your existing header code) ... -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Gestion de classe</title>
  <style>
    /* Custom styles go here */
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #00ff5573;
      color: #fff;
    }

    .container {
      margin-top: 20px;
    }

    .btn-dark {
      background-color: #343a40;
    }

    .btn-dark:hover {
      background-color: #212529;
    }

    .table {
      background-color: #fff;
    }

    .table th,
    .table td {
      text-align: center;
    }

    .link-dark {
      color: #212529;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    projet
    
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add.php" class="btn btn-dark mb-3"><i class="fas fa-plus"></i> Ajout</a>

    <!-- Search Bar -->
    <form action="search.php" method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search by Code de Classe" name="search">
        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i> Search</button>
      </div>
    </form>

    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>Code de Classe</th>
          <th>Intitulé de Classe</th>
          <th>Département</th>
          <th>Option</th>
          <th>Niveau</th>
          <th>Intitulé de Classe (Arabe)</th>
          <th>Option (Arabe)</th>
          <th>Département (Arabe)</th>
          <th>Niveau (Arabe)</th>
          <th>Code Etape</th>
          <th>Code Salima</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `classe`";
        $result = mysqli_query($conn, $sql);
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
              <a href="edit.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="btn btn-outline-dark"><i class="fas fa-edit"></i></a>
              <a href="delete.php?CodClasse=<?php echo $row["CodClasse"] ?>" class="btn btn-outline-dark"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap and Font Awesome -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-d3so/GvP1jPm+J1ptpGcM6CwxmSzWlLjq97T+rFDlDQNFCrjE2xpQjzG2JY3jOcbf5veAuEeiP7+Ypx3gt/3+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
