<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="oneonic";

// Create connection
 $conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT FirstName,LastName FROM employees  ORDER BY City ASC;" ;

$conn-> close();
?>