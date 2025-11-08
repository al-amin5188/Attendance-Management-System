
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="../assets/css/global.css">
  <link rel="stylesheet" href="../assets/css/admin/home.css">
</head>
<body>

  <div class="sidebar" id="sidebar">
    <div class="profile">
      <img src="../assets/images/profile.png" alt="Admin Profile">
      <h3>Admin Name</h3>
    </div>
    <a href="admin-dashboard.php?page=admin">Dashboard</a>
    <a href="admin-dashboard.php?page=manage-students">Manage Students</a>
    <a href="admin-dashboard.php?page=manage-course">Manage Courses</a>
    <a href="admin-dashboard.php?page=manage-teacher">Teacher</a>
    <a href="admin-dashboard.php?page=attendance">Attendance</a>
    <a href="#">Logout</a>
  </div>

  <?php
  $page = $_GET['page'] ?? 'dashboard';
  $file = "../pages/admin/" . $page . ".php";

  if (file_exists($file)) {
    include $file;
  } else {
    echo "<h2>404 - Page Not Found</h2>";
  }
  
  ?>
    <script src="../assets/js/index.js"></script>
</body>

</html>
