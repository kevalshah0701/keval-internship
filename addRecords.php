<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `author_master`(`name`, `dob`, `status`, `address`)
        VALUES ('keval','2011-05-15','designer','ayodhya chowk,Rajkot')";

$result= mysqli_query ($conn, $sql);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully !";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>