<?php
$conn = mysqli_connect("localhost", "root", "", "ymclass");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $classn = $_POST['cname'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM classes WHERE classname = ?");
    $stmt->bind_param("s", $classn);
    
    if ($stmt->execute()) {
        echo "Class deleted successfully.";
    } else {
        echo "Error deleting class: " . $stmt->error;
    }
    
    $stmt->close();
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Class</title>
</head>
<body>
    <div class="container-fluid">
        <h3>Delete Class</h3>
        <form method="post">
            <label for="cname">Class Name</label>
            <input type="text" name="cname" class="form-control" required>
            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
        </form>
    </div>
</body>
</html>
