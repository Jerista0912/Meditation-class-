
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .card{
        width:50%;height:50%;
        box-shadow:0 0 5px 5px rgba(0,0,0,0.3);
    }
    .thank{
        padding-top:20%;
        padding-left:30%;
    }
</style>
</head>
<body>
    
<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "ymclass";


$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $feedback);


if ($stmt->execute()) {
    echo '<div class="thank">
 <div class="card text-center">

  <div class="card-body">

    <p class="card-text">Thank you for your feedback!</p>
    <a href="index.php" class="btn btn-primary">back to home</a>
  </div>

   


</div></div>';
} else {
    echo "<div class='alert alert-primary' role='alert'>
  A simple primary alert—check it out!
</div>" ;
}


$stmt->close();
$conn->close();
?></body>
</html>