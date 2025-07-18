<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="nav">
    <h2>Welcome, <?= $_SESSION['user']; ?></h2>
    <a href="add-student.php">Add Student</a>
    <a href="view-students.php">View Students</a>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>