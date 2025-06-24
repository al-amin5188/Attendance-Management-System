<?php
include '../config/connection.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'student'; 

    // Check if username or email already exists
    $check_sql = "SELECT * FROM auth_users WHERE username='$username' OR email='$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Username or Email already exists!";
    } else {
        $sql = "INSERT INTO auth_users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Registration Successful! ";
            header("Location: login.php");
        } else {
            echo "Registration Failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <!-- ========== Start link section ========== -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <!-- ========== End link section ========== -->
    
</head>
<body>
    <div class="form-container">
        <h2>Student Registration</h2>
        <form method="POST">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit" name="register">Register</button>
        </form>

        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>



</body>
</html>
