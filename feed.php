<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marci Mindfulness/Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<body >
    <div class="container-fluid " style="background: url('feback.jpg'); background-size:100% 160vh;background-position:center; ">
    <div class="container-fluid " style="height:100vh;padding-left:25%; padding-top:5%;">
        <div class="card p-5" style="box-shadow: 0 0 3px 3px  rgba(179,6,94,0.3);background: rgba(179,6,94,0.3);filter:contrast(2) ;width:70%;">
        <div data-bs-theme="dark" class="d-flex">
        <a href="index.php" class="btn-close" aria-label="Close" style="color:black;"></a>
    <p class="pl-5" style="padding-left:30%; font-size:20px;color:white;" >Feedback Form</p>

</div>
        <form action="submitfeed.php" style="padding-left:20%; color:white;"method="POST">
            <div class="form-group" >
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required style="background:transparent;width:70%;border:1px solid white">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required style="background:transparent; width:70%;border:1px solid white">
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="5" required style="background:transparent;width:70%; border:1px solid white;"></textarea>
            </div><br>
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
        </form>
    </div></div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>