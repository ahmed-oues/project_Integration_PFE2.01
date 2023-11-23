<?php
include "connection.php"; 
$charLimit = 25; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newTypeLocal = $_POST["TypeLocal"];
    $newCategory = $_POST["Gategorie"];

    if (strlen($newTypeLocal) > $charLimit) {
        $charLimitExceeded = true;
    } else {
        $checkQuery = "SELECT TypeLocal FROM TypeLocal WHERE TypeLocal = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("s", $newTypeLocal);
        $checkStmt->execute();
        $checkStmt->store_result();
        
        if ($checkStmt->num_rows > 0) {
            $duplicateTypeLocal = true;
        } else {
            $insertStmt = $conn->prepare("INSERT INTO TypeLocal (TypeLocal, Gategorie) VALUES (?, ?)");
            $insertStmt->bind_param("ss", $newTypeLocal, $newCategory);

            if ($insertStmt->execute()) {
                header("Location: view.php"); 
                exit();
            } else {
                
                echo "Error: " . $insertStmt->error;
            }

            $insertStmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add TypeLocal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add TypeLocal</h1>
        <form method="post" action="create.php">
            <label for="TypeLocal">TypeLocal:</label>
            <input type="text" name="TypeLocal" required class="form-control" maxlength="25">
           
            <?php if (isset($duplicateTypeLocal) && $duplicateTypeLocal): ?>
                <span class="error-message">This TypeLocal already exists !!!!</span>
            <?php endif; ?>
            <br>

            <label for="Gategorie">Gategorie:</label>
            <input type="text" name="Gategorie" class="form-control" maxlength="25"><br>

            <button type="submit" class="btn btn-primary">Add TypeLocal</button>
            <a type="cancel" class="btn btn-primary" href="view.php">Cancel</a>

        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
