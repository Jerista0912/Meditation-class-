<?php
if (isset($_FILES['image'])) {
    $conn = mysqli_connect("localhost", "root", "", "ymclass");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("Upload failed with error code: " . $_FILES['image']['error']);
    }

    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageName = $_POST['image_name'];
    $stmt = $conn->prepare("INSERT INTO gallery (image, image_name) VALUES (?, ?)");
    $stmt->bind_param("bs", $imageData, $imageName);
    if ($stmt->execute()) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    mysqli_close($conn);
}
?>
