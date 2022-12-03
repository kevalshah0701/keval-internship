

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oneonic";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employees (FirstName,LastName,Emailid,MobileNo,City )
VALUES ('rohan', 'sharma', 'rohan@example.com', '9185642398', 'ahmedabad')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully !";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>