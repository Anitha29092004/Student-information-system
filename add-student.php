<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-box">
    <h2>Add New Student</h2>
    <form action="insert.php" method="POST">
      <input type="text" name="name" placeholder="Full Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <input type="text" name="department" placeholder="Department" required><br>
      <input type="date" name="dob" required><br>
      <button type="submit">Save</button>
    </form>
  </div>
</body>
</html>