<?php
$conn = mysqli_connect("localhost", "root", "", "ymclass");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errorMessages = array();
$dobForDb = null; // ✅ IMPORTANT: prevent undefined variable error

if (isset($_POST['register'])) {

    // ---------------- NAME ----------------
    if (empty($_POST['name'])) {
        $errorMessages[] = 'Name is required';
    } elseif (!preg_match('/^[a-zA-Z ]+$/', $_POST['name'])) {
        $errorMessages[] = "Invalid name format";
    }

    // ---------------- EMAIL ----------------
    if (empty($_POST['email'])) {
        $errorMessages[] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Invalid email format";
    }

    // ---------------- CHECK DUPLICATE NAME ----------------
    $stmt = $conn->prepare("SELECT * FROM studenttable WHERE name = ?");
    $stmt->bind_param("s", $_POST['name']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('You are already registered for this class.')</script>";
    } else {

        // ---------------- PHONE ----------------
        if (empty($_POST['phno'])) {
            $errorMessages[] = "Phone number is required";
        } elseif (!preg_match("/^(9|6|7|8)[0-9]{9}$/", $_POST['phno'])) {
            $errorMessages[] = "Invalid phone number";
        }

        // ---------------- DOB (FIXED) ----------------
        if (empty($_POST['dob'])) {
            $errorMessages[] = "DOB is required";
        } else {

            $dobInput = trim($_POST['dob']);

            // If your input type is <input type="date"> use Y-m-d
            $dobDate = DateTime::createFromFormat('Y-m-d', $dobInput);

            if (!$dobDate) {
                $errorMessages[] = "Invalid DOB format";
            } else {

                $age = (new DateTime())->diff($dobDate)->y;

                if ($age < 10) {
                    $errorMessages[] = "You must be at least 10 years old";
                } else {
                    $dobForDb = $dobDate->format('Y-m-d'); // ✅ correct DB format
                }
            }
        }

        // ---------------- ADDRESS ----------------
        if (empty($_POST['address'])) {
            $errorMessages[] = "Address is required";
        }

        // ---------------- STOP IF ERRORS ----------------
        if (!empty($errorMessages)) {
            ?>
            <html>
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            </head>

            <body>
            <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
                <div class="popup text-center p-4 bg-white shadow rounded">
                    <h3 style="color:red;">Errors</h3>

                    <?php
                    foreach ($errorMessages as $error) {
                        echo "<p>$error</p>";
                    }
                    ?>

                    <a href="classreg.php" class="btn btn-primary">OK</a>
                </div>
            </div>
            </body>
            </html>
            <?php
        }

        // ---------------- INSERT DATA ----------------
        elseif (empty($errorMessages)) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $selectclass = $_POST['classid'];
            $phno = $_POST['phno'];
            $address = $_POST['address'];

            // ✅ safety check
            if ($dobForDb === null) {
                die("DOB error. Please go back and enter valid date.");
            }

            $stmt = $conn->prepare("
                INSERT INTO studenttable 
                (name, dob, email, selectedclass, phno, address)
                VALUES (?, ?, ?, ?, ?, ?)
            ");

            $stmt->bind_param("ssssss", $name, $dobForDb, $email, $selectclass, $phno, $address);

            if ($stmt->execute()) {
                ?>
                <html>
                <head>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                </head>

                <body>
              <div class="container-fluid p-0">
  <audio id='clickSound' src="soundtick.wav" preload='auto'></audio>
  <center>
                     <div class="popup open-popup" id="popup" onclick="openpopup()">
    <img src="tick.png" alt="">
                        <h2>Thank You</h2>
                        <p>Registration Successful</p>
                        <a href="index.php" class="btn btn-success">OK</a>
                    </div>
            </center>

                
                </body>
                  <script>

        document.getElementById('clickSound').play();

    </script>
                </html>
                <?php
            } else {
                echo "<script>alert('Registration failed'); window.location='index.php';</script>";
            }
        }
    }
}
?>