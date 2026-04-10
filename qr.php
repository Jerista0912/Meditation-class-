<?php
// Include the QR Code library
require 'vendor/autoload.php'; // if using composer
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Color\Color;

// Connect to MySQL
$conn = new mysqli("localhost", "root", "", "ymclass");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    // Insert into the database
    $stmt = $conn->prepare("INSERT INTO users (name, email, amount) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $name, $email, $amount);

    if ($stmt->execute()) {
        // Get the last inserted user ID
        $user_id = $stmt->insert_id;

        // Generate the payment URL (this could be a unique URL tied to your payment system)
        $payment_url = "https://yourpaymentgateway.com/pay?user_id=$user_id&amount=$amount";

        // Generate the QR code for the payment URL
        $qrCode = QrCode::create($payment_url)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        $writer = new PngWriter();
        $qrImage = $writer->write($qrCode);

        // Save the QR code image as a PNG file
        $qrCodeFile = "qrcodes/qr_code_$user_id.png";
        file_put_contents($qrCodeFile, $qrImage->getString());

        // Show success message with QR code
        echo "<div class='alert alert-success'>Registration successful! Scan the QR code below to make the payment:</div>";
        echo "<img src='$qrCodeFile' alt='Payment QR Code' class='img-fluid'>";
    } else {
        echo "<div class='alert alert-danger'>Error: Could not register the user.</div>";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Payment Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>