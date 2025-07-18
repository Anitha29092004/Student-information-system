<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>View Students</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="table-box">
    <h2>Student List</h2>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>DOB</th>
        <th>Action</th>
      </tr>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM students");
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
          <td>{$row['name']}</td>
          <td>{$row['email']}</td>
          <td>{$row['department']}</td>
          <td>{$row['dob']}</td>
          <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
        </tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>