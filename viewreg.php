<?php
$conn = mysqli_connect('localhost', 'root', '', 'ymclass');
$sql = "SELECT * FROM studenttable  ORDER BY studentid DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
         
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dddddd;
        }

        th {
            background-color: #0d6efd;
            color: white;
        }

        
    </style>
</head>
<body>
<h3 style=" color:white;">Registered Students</h3>
<table>
    <tr>
        <th>Student Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Class</th>
        <th>Phone No.</th>
        <th>Address</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
       
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo date('d-m-Y', strtotime($row['dob']));?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['selectedclass']; ?></td>
            <td><?php echo $row['phno']; ?></td>
            <td><?php echo $row['address']; ?></td>
        </tr>
    <?php } ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
