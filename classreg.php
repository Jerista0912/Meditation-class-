<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marci Mindfulness Class Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="script.js" >
    <style>
        ::placeholder {
            font-family: "Baskervville SC", serif;
        }
        . .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            transition: border-color 0.2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #1877f2;
            box-shadow: 0 0 5px rgba(24, 119, 242, 0.5);
        }
        body {
            background-color: #f0f2f5;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 190%;
            max-width: 540px;
            padding: 20px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <marquee  class="p-0"style="background-color:#FF69B4;height:20px;">
            <h6 style="font-size:15px;">Register Your Classes Now! If you have any enquiry, please contact us - 976437897 or visit our institute located at - <b>33A, Periya Kovil Street, Marci Mindfulness, Thoothukudi-628001.</b> Thank You...</h6>
        </marquee>
        <div class="row">
            <div class="col-12" style="display:flex;justify-content:center;padding:10px;position:fixed;">
                <div class="card w-50">
                    <div class="card-body">
                        <form method="POST" action="rephp2.php" >
                            <h3 class="text-center">Registration Form</h3>
                            <div class="mb-3">
                                <label><b>Name:</b></label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label><b>Date of Birth:</b></label>
                   <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="mb-3">
                                <label><b>Email:</b></label>
                                <input type="email" class="form-control" name="email" placeholder="Enter valid Email" required>
                            </div>
                            <div class="mb-3">
                                <label><b>Select Your Class:</b></label>
                                <select class="form-select" name="classid" required>
                                    <option value="">Select a class</option>
                                    <?php 
                                    $conn = new mysqli('localhost', 'root', '', 'ymclass');
                                    $classes = $conn->query("SELECT classid, classname FROM classes");
                                    foreach ($classes as $option) { ?>
                                        <option value="<?= htmlspecialchars($option['classid']); ?>"><?= htmlspecialchars($option['classname']); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label><b>Phone Number:</b></label>
                                <input type="tel" class="form-control" name="phno" placeholder="Enter the phone number" required>
                            </div>
                            <div class="mb-3">
                                <label><b>Address:</b></label>
                                <input type="text" class="form-control" name="address" placeholder="Enter your address" required>
                            </div>
                            <input type="submit" class="btn btn-outline-danger w-100" name="register" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
