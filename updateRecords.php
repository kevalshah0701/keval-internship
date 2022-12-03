<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "master";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfully !<br><br>";
}

$sql ="UPDATE `author_master` SET `dob`='1999-08-25' WHERE id= 2 ";

$result = mysqli_query($conn, $sql);


if ($conn->query($sql) === TRUE) {
    echo "New record Updated successfully !";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>