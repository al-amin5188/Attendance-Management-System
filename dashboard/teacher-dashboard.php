
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teache Dashboard</title>

  <link rel="stylesheet" href="../assets/css/global.css">
</head>
<body>

  <div class="sidebar" id="sidebar">
    <div class="profile">
      <img src="../assets/images/profile.png" alt="teache Profile">
      <h3>Teacher Name</h3>
    </div>
    <a href="teache-dashboard.php?page=teache">Dashboard</a>
    <a href="teache-dashboard.php?page=manage-students">My Class</a>
    <a href="teache-dashboard.php?page=manage-course">Take Attendance</a>
    <a href="teache-dashboard.php?page=manage-teacher">Attendance History</a>
    <a href="#">Logout</a>
  </div>

  <?php
  $page = $_GET['page'] ?? 'dashboard';
  $file = "../pages/teache/" . $page . ".php";

  if (file_exists($file)) {
    include $file;
  } else {
    echo "<h2>404 - Page Not Found</h2>";
  }
  
  ?>
    <script src="../assets/js/index.js"></script>
</body>

</html>
