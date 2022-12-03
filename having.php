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

$sql="SELECT COUNT(EmployeeId), City
FROM employees
GROUP BY City
HAVING COUNT(employeeId) > 3;"



$conn-> close();
?>