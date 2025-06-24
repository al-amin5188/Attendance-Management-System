<?php
include '../config/connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Email Check
    $sql = "SELECT * FROM auth_users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Token Generate
        $token = md5(rand());  // simple random token

        // Save Token in Database
        $update = "UPDATE auth_users SET reset_token='$token' WHERE email='$email'";
        mysqli_query($conn, $update);

        // Show Reset Link
        echo "Your password reset link: ";
        echo "<a href='reset-password.php?token=$token'>Reset Password</a>";
    } else {
        echo "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forget Password</title>

    <!-- ========== Start link section ========== -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <!-- ========== End link section ========== -->

</head>
<body>
    <div class="form-container">
        <h2>Forget Password</h2>
        <form method="POST">
            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <button type="submit" name="submit">Send Reset Link</button>
        </form>

        <p><a href="login.php">Back to Login</a></p>
    </div>

</body>
</html>
