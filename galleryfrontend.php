<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            $conn = new mysqli("localhost", "root", "", "ymclass");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($conn, $query);
            $check = mysqli_num_rows($query_run) > 0;

            if ($check) {
                while ($row = mysqli_fetch_array($query_run)) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="card-img-top" alt="Image">';
                    echo '<h2 class="card-title">' . htmlspecialchars($row['image_name']) . '</h2>'; 
                    echo '<p class="card-text">Some description here</p>'; 
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No images found.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
