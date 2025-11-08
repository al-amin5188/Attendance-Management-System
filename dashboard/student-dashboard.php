
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>

  <link rel="stylesheet" href="../assets/css/global.css">
</head>
<body>

  <div class="sidebar" id="sidebar">
    <div class="profile">
      <img src="../assets/images/profile.png" alt="student Profile">
      <h3>Student Name</h3>
    </div>
    <a href="student-dashboard.php?page=student">Dashboard</a>
    <a href="student-dashboard.php?page=manage-students">My Class</a>
    <a href="student-dashboard.php?page=manage-studentr">Attendance History</a>
    <a href="#">Logout</a>
  </div>

  <?php
  $page = $_GET['page'] ?? 'dashboard';
  $file = "../pages/student/" . $page . ".php";

  if (file_exists($file)) {
    include $file;
  } else {
    echo "<h2>404 - Page Not Found</h2>";
  }
  
  ?>
</body>

</html>
