<!DOCTYPE html>
<html>
  <head>
    <title>Departments registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Departements</h1>
      </div>
      <form action="chercherDep.php" method="POST">
        <div class="title"><h1>Chercher Département</h1></div>
        <div class="info">
          <div class="form-group">
            <label>Choisir le critère de recherche:</label>
            <select name="critere" class="form-control">
              <option value="CodeDep">Code du département</option>
              <option value="Département">Nom du département</option>
              <option value="Responsable">Responsable</option>
              <option value="MatProf">MatProf</option>
              <option value="DepartementARAB">Nom du département en arabe</option>
            </select>
          </div>
          <div class="form-group">
            <label>Entrer la valeur de recherche:</label>
            <input type="text" name="val" class="form-control">
          </div>
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
