
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ymclass";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT name, feedback ,submitted_at FROM feedback ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Playwrite+CL:wght@100..400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

</head>
<style>.zilla-slab-semibold {
  font-family: "Zilla Slab", serif;
  font-weight: 600;
  font-style: normal;
}</style>
<body>
    <div class="container-fluid p-0"style="background:rgba(0,0,0,0.2);">
    <div class="container-fluid pt-5">
<div class="container">
        <h2 class="text-center mb-4 p-4 zilla-slab-semibold">Customer Testimonials</h2>
        <div class="row">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {?>
                <div class="col-md-4" >
                 <div class="card mb-4 shadow-sm" style="backgorund-color:#ffff;">
                <div class="card-body mt-2">
                <h5 class="card-title d-flex justify-content-center"> <?php echo $row["name"]?></h5><h6 class="d-flex justify-content-center">---------------------------------</h6>
                <p class="card-text mt-2 d-flex justify-content-center"><?php echo $row["feedback"]?></p>
                <footer class="blockquote-footer mt-3"><?php echo'Submitted on:'?> <cite title="Source Title"><?php echo $row["submitted_at"]?></cite></footer>
                </div>
                </div>
                </div><?php
                }
            } else {
                echo '<p>No testimonials available.</p>';
            }
            $conn->close();
            ?>
        </div></div></div></div>
    </div><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
