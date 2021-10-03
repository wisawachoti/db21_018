<?php
$servername = "localhost";
$username = "db21_018";
$password = "db21_018";

$dbname = "db21_018";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_set_charset($conn, "utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(!$conn->select_db($dbname)){
  die("Connection failed: " . $conn->connect_error);
}

?>