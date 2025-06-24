<?php
session_start();
include '../config/connection.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] != 'admin') {
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['add_teacher'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'teacher';

    // Check if username or email already exists
    $check_sql = "SELECT * FROM auth_users WHERE username='$username' OR email='$email'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        echo "Username or Email already exists!";
    } else {
        // Teacher Create
        $sql = "INSERT INTO auth_users (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
        if (mysqli_query($conn, $sql)) {
            echo "Teacher Added Successfully!";
        } else {
            echo "Failed to Add Teacher!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>

    <!-- ========== Start link section ========== -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <!-- ========== End link section ========== -->
     
</head>
<body>

<h2>Add Teacher (Admin Only)</h2>
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="add_teacher">Add Teacher</button>
</form>

<p><a href="../dashboard/dashboard-admin.php">Back to Admin Dashboard</a></p>

</body>
</html>
