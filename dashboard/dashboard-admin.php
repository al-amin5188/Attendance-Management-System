<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ========== Start link section ========== -->
    <link rel="stylesheet" href="../assets/css/global.css">
    <!-- ========== End link section ========== -->
     
</head>
<body>
    <h1>Admin deshboard</h1>
    <h2>Login link</h2><br>
    <a href="../auth/logout.php">Logout</a><br><br>

    <h2> create admin link</h2><br>
    <a href="../admin/add-admin.php">add-admin</a><br><br>

    <h2>create teacher link</h2><br>
    <a href="../admin/add-teacher.php">add-teacher</a><br>

</body>
</html>