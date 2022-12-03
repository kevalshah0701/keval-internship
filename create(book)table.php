<?php

// Connecting to the Database

$servername = "localhost";
$username = "root";
$password = "";
$database = "books_management";

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

$sql = "CREATE TABLE `books_management`.`bookmaster` 
        (`bookid` INT NOT NULL AUTO_INCREMENT , `authorid` INT NOT NULL ,
        `title` VARCHAR(50) NOT NULL , `language` VARCHAR(50) NOT NULL , 
        `publishedon` DATE NOT NULL , `status` VARCHAR(50) NOT NULL , 
        `createdat` DATETIME NOT NULL , `updatedat` DATETIME NOT NULL , 
        PRIMARY KEY (`bookid`))";


$result= mysqli_query ($conn, $sql);

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