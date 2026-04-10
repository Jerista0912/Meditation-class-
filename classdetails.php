<?php
$conn=mysqli_connect("localhost","root","","ymclass");
$sql="SELECT * From classes";
$result=mysqli_query($conn,$sql);
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
<table>
    <tr>
        <th>Class id </th>
        <th>Class Name</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['classid']; ?></td>
            <td><?php echo $row['classname'] ?></td>
        </tr>
            <?php
    }?>