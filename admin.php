<?php
$valid_pages = ['adminreg', 'viewreg', 'classdetails', 'welcome'];
$page = isset($_GET['page']) && in_array($_GET['page'], $valid_pages) ? $_GET['page'] : 'welcome';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marci Mindfulness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .adminwel {
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-dark p-0">
<div class="container-fluid p-0 m-0">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light mx-5" href="#">Admin User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-end mb-2 mb-lg-0 mx-5">
                    <li class="nav-item mx-2">
                        <a href="?page=adminreg" class="nav-link text-light">Admin Registration</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="?page=viewreg" class="nav-link text-light">Students Details</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="?page=classdetails" class="nav-link text-light">Classes</a>
                    </li>
                
                  
                </ul>
            </div>
        </div>
    </nav>

    <div class="adminwel" id="adminwel">
        <?php

        if ($page === 'adminreg') {
            include 'adminreg.php';
        } elseif ($page === 'viewreg') {
            include 'viewreg.php';
        } elseif ($page === 'classdetails') {
            include 'classdetails.php';
        } 
            else {
     
            echo '<h1 class="text-light pt-4">Welcome Admin....!</h1>';
            echo '<h6 class="text-center text-light">Manage Your Details</h6>';
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
