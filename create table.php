<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "oneonic";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
// Create a table in the db
$sql = "CREATE TABLE `employees` ( `employee Id` INT(6) NOT NULL AUTO_INCREMENT , `First name` VARCHAR(255) NOT NULL ,`Last name` VARCHAR(255) NOT NULL , `Email id` VARCHAR(255) NOT NULL ,`Mobile No` VARCHAR(12) NOT NULL ,`City` VARCHAR(255) NOT NULL , PRIMARY KEY (`Employee Id`))";
$result= mysqli_query ($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
