<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Program</title>
 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="container w-50" >
    <h2 class="mt-4" style="color:white">Schedule Event</h2>
    <form action="sc1.php" method="post">
        <div class="form-group">
            <label  style="color:white">Class Name:</label>
            <input type="text" class="form-control" id="event_name" name="event_name" required>
        </div>
    
        <div class="form-group">
            <label style="color:white">Class Time:</label>
            <input  class="form-control" id="event_time" name="event_time" required>
        </div>
        <div class="form-group">
            <label style="color:white"> Description:</label>
            <textarea class="form-control" id="event_description" name="event_description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Class</button>
</form>
</div>
    </div>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>