<?php
$servername = "192.168.150.213";
$username = "webprogss211";
$password = "fancyR!ce36";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (name, email, website, comment, gender)
VALUES ('Shane Ricafort', 'sgricafort@student.apc.edu.ph', 'http://apcwebprog.csf.ph/~sgricafort/lab3/ci4/public/index', 'mmmmmmmmmmmmmm', 'Female')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
