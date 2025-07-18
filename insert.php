<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$dob = $_POST['dob'];

$sql = "INSERT INTO students (name, email, department, dob)
        VALUES ('$name', '$email', '$department', '$dob')";

if ($conn->query($sql)) {
  header("Location: view-students.php");
} else {
  echo "Error: " . $conn->error;
}
?>