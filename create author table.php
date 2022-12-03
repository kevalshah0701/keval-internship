<?php

// Connecting to the Database

$servername = "localhost";
$username = "root";
$password = "";
$database = "master";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successfull

if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfully !<br><br>";
}

// Create a table in the db

$sql = "CREATE TABLE `master`.`author_master`
        (`id` INT NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(255) NOT NULL , 
        `dob` DATE NOT NULL , 
        `status` VARCHAR(255) NOT NULL , 
        `address` VARCHAR(255) NOT NULL , 
        `created at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
        `updated at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
        PRIMARY KEY (`id`))";


$result= mysqli_query($conn, $sql);

// Check for the table creation success

if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". 
    mysqli_error($conn);
}
  
$conn->close();

?>