<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['user'] = $user;
    header("Location: dashboard.php");
  } else {
    $error = "Invalid credentials!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">
  <div class="login-box">
    <h2>Admin Login</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Login</button>
      <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    </form>
  </div>
</body>
</html>