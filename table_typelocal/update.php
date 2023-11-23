<?php
include "connection.php"; 

$charLimit = 25; 

if (isset($_GET['TypeLocal'])) {
    $typeLocalValue = $_GET['TypeLocal'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newTypeLocal = $_POST["TypeLocal"];
        $newCategory = $_POST["Gategorie"];

        if (strlen($newTypeLocal) > $charLimit) {
            $charLimitExceeded = true;
        } else {

            $checkQuery = "SELECT TypeLocal FROM TypeLocal WHERE TypeLocal = ? AND TypeLocal <> ?";
            $checkStmt = $conn->prepare($checkQuery);
            $checkStmt->bind_param("ss", $newTypeLocal, $typeLocalValue);
            $checkStmt->execute();
            $checkStmt->store_result();

            if ($checkStmt->num_rows > 0) {
                $duplicateTypeLocal = true;
            } else {

                $stmt = $conn->prepare("UPDATE TypeLocal SET TypeLocal = ?, Gategorie = ? WHERE TypeLocal = ?");
                $stmt->bind_param("sss", $newTypeLocal, $newCategory, $typeLocalValue);

                if ($stmt->execute()) {

                    header("Location: view.php"); 
                    exit();
                } else {

                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        }
    }

    $sql = "SELECT * FROM TypeLocal WHERE TypeLocal = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $typeLocalValue);
    $stmt->execute();
    $result = $stmt->get_result();
    $record = $result->fetch_assoc();
    $stmt->close();
} else {
    echo "TypeLocal value not provided for editing.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit TypeLocal</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit TypeLocal</h1>
        <form method="post" action="update.php?TypeLocal=<?php echo $typeLocalValue; ?>">
            <label for="TypeLocal">TypeLocal:</label>
            <input type="text" name="TypeLocal" value="<?php echo $record['TypeLocal']; ?>" required maxlength="25" class="form-control">
            <br>
            <?php if (isset($duplicateTypeLocal) && $duplicateTypeLocal): ?>
                <span class="error-message">This TypeLocal already exists !!!!</span>
            <?php endif; ?>
            <br>

            <label for="Gategorie">Gategorie:</label>
            <input type="text" name="Gategorie" value="<?php echo $record['Gategorie']; ?>" maxlength="25" class="form-control"><br>

            <button type="submit" class="btn btn-primary">Update TypeLocal</button>
            <button type="cancel" class="btn btn-primary">Cancel</button>
        </form>
    </div>
    
 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
