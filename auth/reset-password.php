<?php
include '../config/connection.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if Token is Valid
    $sql = "SELECT * FROM auth_users WHERE reset_token='$token'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        if (isset($_POST['reset'])) {
            $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Update Password and Clear Token
            $update = "UPDATE auth_users SET password='$newPassword', reset_token=NULL WHERE reset_token='$token'";
            if (mysqli_query($conn, $update)) {
                echo "Password reset successful! ";
                header("Location: login.php");
            } else {
                echo "Password reset failed!";
            }
        }

    } else {
        echo "Invalid or expired token!";
    }

} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>

    <!-- ========== Start link section ========== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <!-- ========== End link section ========== -->

</head>
<body>
    <div class="form-container">
        <h2>Reset Password</h2>
        <form method="POST">
            <label>New Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit" name="reset">Reset Password</button>
        </form>
    </div>

</body>
</html>
