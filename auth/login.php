<?php
session_start();
include '../config/connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database user data 
    $sql = "SELECT * FROM auth_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];

    
        if ($user['role'] == 'admin') {
            header("Location: ../dashboard/admin-dashboard.php?page=admin");
        } elseif ($user['role'] == 'teacher') {
            header("Location: ../dashboard/teacher-dashboard.php");
        } elseif ($user['role'] == 'student') {
            header("Location: ../dashboard/student-dashboard.php");
        }
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- ========== Start link section ========== -->
    
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- ========== End link section ========== -->

</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST">
            <label>Username:</label><br>
            <input type="text" name="username" required><br><br>

            <label>Password:</label><br>
            <input type="password" name="password" required><br><br>

            <button type="submit" name="login">Login</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register</a></p>
        <p><a href="forget-password.php">Forget Password?</a></p>
    </div>

</body>
</html>
