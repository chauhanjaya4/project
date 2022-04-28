<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conveze1_trfconv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "UPDATE  wp_users SET user_role = 'user' ";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
