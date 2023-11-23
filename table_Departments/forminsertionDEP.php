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
      <form action="insert_departments.php" method="POST">
        <div class="title"><h1>Inserer Departement</h1></div>
<div class="info">
    <input type="text" name="CodeDep" placeholder="CodeDep">
    <input type="text" name="Departement" placeholder="Département">
    <input type="text" name="Responsable" placeholder="Responsable">
    <input type="text" name="MatProf" placeholder="MatProf">
    <input type="text" name="DepartementARAB" placeholder="DepartementARAB">
    <button>Submit</button>
    </div>
</form>


</div>
  </body>
</html>
