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
    <h1>Student deshboard</h1>
    <a href="../auth/logout.php">Logout</a>

</body>
</html>