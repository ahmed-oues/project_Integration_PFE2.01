<?php
include "connection.php"; 

if (isset($_GET['TypeLocal'])) {
    $typeLocalValue = $_GET['TypeLocal'];

    
    if (isset($_POST['confirmDelete'])) {
       
        $stmt = $conn->prepare("DELETE FROM TypeLocal WHERE TypeLocal = ?");
        $stmt->bind_param("s", $typeLocalValue);

        if ($stmt->execute()) {
           
            header("Location: view.php");
            exit();
        } else {
            
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
} else {
    echo "TypeLocal value not provided for deletion.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete TypeLocal</title>
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Delete TypeLocal</h1>
        <p>Are you sure you want to delete this record?</p>
        <form method="post" action="delete.php?TypeLocal=<?php echo $typeLocalValue; ?>">
            <button type="submit" name="confirmDelete" class="btn btn-danger">Delete</button>
            <a href="view.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    
    


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
