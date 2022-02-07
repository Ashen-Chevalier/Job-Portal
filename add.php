<?php

require_once("connection.php");
$email = $conn->real_escape_string($_POST['signupemail']);
$pass = $conn->real_escape_string($_POST['signuppass']);
$sql = "INSERT INTO users VALUES ('$email', '$pass')";
if ($conn->query($sql) === TRUE) {
  echo "Successfully added";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
