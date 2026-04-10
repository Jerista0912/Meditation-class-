<?php
$conn = mysqli_connect('localhost','root','','ymclass');

$message = "";

if(isset($_POST['register_admin'])){
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password !== $confirm_password){
        $message = "❌ Passwords do not match!";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin(password) VALUES('$hashed_password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $message = "✅ Admin registered successfully!";
        } else {
            $message = "❌ Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #4e73df, #1cc88a); height:100vh;">

<div class="d-flex justify-content-center align-items-center h-100">

    <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
        
        <h3 class="text-center mb-3">Admin Registration</h3>

        <!-- Message -->
        <?php if(!empty($message)) { ?>
            <div class="alert text-center <?php echo (strpos($message,'successfully') !== false) ? 'alert-success' : 'alert-danger'; ?>">
                <?php echo $message; ?>
            </div>
        <?php } ?>

        <!-- Form -->
        <form method="POST">

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
            </div>

            <div class="d-grid">
                <button type="submit" name="register_admin" class="btn btn-primary">
                    Register Admin
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>