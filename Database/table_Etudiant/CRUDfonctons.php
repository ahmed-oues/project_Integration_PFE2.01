<?php 
ini_set("display_errors", '1');
error_reporting(E_ALL);





function processForm($data) {
    $errors = array();
    foreach ($data as $field => $content) {
        
        if (isset($data[$field])) {
            if ($data[$field]== 'CodClasse'){
                $classCode=$data[$field];
                require_once 'conect.php';
                   
                $stmt = $conn->query("SELECT * FROM Classe WHERE CodClasse = '$classCode' ");
                $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
                require_once 'closeconn.php';
                if (empty($etudiants)) {
                    $errors[] = "Error in field '$field': no class found.";
                }
        
        
                
            }
        } else {
            $errors[] = "Error in field '$field': Missing value.";
        }
    }
    
    return $errors;
}



function insertData($data) {
      require_once 'conect.php';
   
      $fields = implode(", ", array_keys($data));
      $values = "'" . implode("', '", $data) . "'";
      $sql = "INSERT INTO Etudiant ($fields) VALUES ($values)";
  
      $conn->exec($sql);
      require_once 'closeconn.php';

}

function deleteData($ncin) {
    require_once 'conect.php';


    $sql = "DELETE FROM Etudiant WHERE NCIN = '$ncin'";

    $conn->exec($sql);
    require_once 'closeconn.php';

}

function getEtudiantsFromDatabase() {
    try {
        require_once 'conect.php';

        $stmt = $conn->query("SELECT * FROM Etudiant");
        $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once 'closeconn.php';


        return $etudiants;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function getEtudiantsFromDatabaseParam($NCIN) {
    try {
        require_once 'conect.php';

        $stmt = $conn->query("SELECT * FROM Etudiant WHERE NCIN = '$NCIN'");
        $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once 'closeconn.php';


        return $etudiants;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function updateData($data) {
    try {
        require_once 'conect.php';

        // Build the SET clause for the SQL query
        $setClause = '';
        foreach ($data as $key => $value) {
            $setClause .= "$key = '$value', "; // Assuming values are safe and don't need parameterized binding
        }
        $setClause = rtrim($setClause, ', ');

        $sql = "UPDATE Etudiant SET $setClause WHERE NCIN = '{$data['NCIN']}'"; // Assuming NCIN is the primary key

        $conn->exec($sql);

        require_once 'closeconn.php';

        return "Data updated successfully";
    } catch (PDOException $e) {
        return "Error updating data: " . $e->getMessage();
    }
}

function searchInDatabase($data) {
    require_once 'conect.php';

    $whereClause = array();
    $dateFields = ['DateNais', 'Anneesopt', 'DatePremiereInscp'];
    $params = array();

    foreach ($data as $field => $value) {
        if (in_array($field, $dateFields)) {
            $startDateKey = $field . 'ST';
            $endDateKey = $field . 'FN';
            $startDate = isset($_POST[$startDateKey]) ? $_POST[$startDateKey] : '';
            $endDate = isset($_POST[$endDateKey]) ? $_POST[$endDateKey] : '';

            if (!empty($startDate) && !empty($endDate)) {
                $whereClause[] = "$field BETWEEN :{$field}StartDate AND :{$field}EndDate";
                $params[":{$field}StartDate"] = $startDate;
                $params[":{$field}EndDate"] = $endDate;
            } elseif (!empty($startDate)) {
                $whereClause[] = "$field >= :{$field}StartDate";
                $params[":{$field}StartDate"] = $startDate;
            } elseif (!empty($endDate)) {
                $whereClause[] = "$field <= :{$field}EndDate";
                $params[":{$field}EndDate"] = $endDate;
            }
        } elseif (!empty($value)) {
            $whereClause[] = "$field = :$field";
            $params[":$field"] = $value;
        }
    }

    $whereCondition = implode(' AND ', $whereClause);

    $sql = "SELECT * FROM Etudiant WHERE $whereCondition";
    $stmt = $conn->prepare($sql);

    $stmt->execute($params);

    if ($stmt->errorCode() != 0) {
        $errors = $stmt->errorInfo();
        die("SQL error: {$errors[2]}");
    }

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    require_once 'closeconn.php';

    return $res;
}









