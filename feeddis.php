
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid p-0">
    <h2 class="mb-4">User Feedback</h2>

    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ymclass";

 
    $conn = new mysqli($servername, $username, $password, $dbname);

  
    $sql = "SELECT name, email,feedback FROM feedback ORDER BY submitted_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          
            ?><div class="card mb-3"style="width:100px;border:1px soild black;">
                      <div class="card-body" >
                      <h5 class="card-title"><?php echo 'htmlspecialchars($row["name"]) ';?>
            <h6 class="card-subtitle mb-2 text-muted"> <?php echo 'date("F j, Y, g:i a", strtotime($row["email"])) ';?>
              <p class="card-text">' <?php echo' nl2br(htmlspecialchars($row["feedback"])) '?>
            </div>
            </div><?php
        }
    } else {
        echo '<p class="text-muted">No feedback available.</p>';
    }

    $conn->close();
    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


