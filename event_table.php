<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ymclass";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM events";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="schedule-div w-100 ">
<nav class="navbar navbar-expand-lg navbar-style p-0" style="background-color:#FF69B4;Position:fixed;top:0;z-index:1000;width:100%; padding-bottom:30px;">
 <h3 style="padding-left:40%;">Class Schedule</h4>
    </nav>  
 <div class="container-fluid  p-3">
 <div class="container-fluid">
  <div class="row " style="padding-top:10%;">
    
    <center>
      
    <table class="table table-striped" style="width:70%;background-color:pink;padding-top:30px;">
        <thead>
            <tr>
                <th >Class Name</th>
                <th  >Time</th>
                <th >Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td >{$row['class_name']}</td>
                            <td>{$row['class_time']}</td>
                            <td>{$row['class_description']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td >No events found</td></tr>";
            }
            ?>
        </tbody>
    </table>
        </div>

    </div></div>
</div></div>
       
</body>
</html>
<?php
$conn->close();
?>