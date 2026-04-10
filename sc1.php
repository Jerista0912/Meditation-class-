<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ymclass";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$class_name = isset($_POST['class_name']) ? trim($_POST['class_name']) : '';
$class_time = isset($_POST['class_time']) ? trim($_POST['class_time']) : '';
$class_description = isset($_POST['class_description']) ? trim($_POST['class_description']) : '';



if (empty($class_name) || empty($class_time) || empty($class_description)) {
    die("Please fill in all fields.");
}

if (strpos($class_time, ':') === false) {
    $class_time .= ':00'; 
}

$stmt = $conn->prepare("INSERT INTO events (class_name, class_time, class_description) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $class_name, $class_time, $class_description);

if ($stmt->execute()) {
    echo "New event added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
