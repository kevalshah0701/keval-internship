<?php

/* JOIN clause is used to combine rows from two or more tables, based on a related 
   column between them. */

// Connecting to the Database

$servername = "localhost";
$username = "root";
$password = "";
$database = "shop";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfully !<br><br>";
}

$sql = "SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers
ON Orders.CustomerID=Customers.CustomerID;";
$result = mysqli_query($conn, $sql);

// Find the number of records returned

$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase: <br><br>";

// Display the rows returned by the sql query
if($num> 0){
    

    // We can fetch in a better way using the while loop

    echo "<table border ='2' width =50%>";
    echo "<tr><td> FirstName </td><td> LastName </td> <td> Emailid </td>
    <td> MobileNo </td> <td> City </td><td>Role</td></tr>";

    while($row = mysqli_fetch_assoc($result)){

    echo "<tr>
    <td>    {$row['FirstName']}     </td>
    <td>    {$row['LastName']}      </td>
    <td>    {$row['Emailid']}       </td>
    <td>    {$row['MobileNo']}      </td>
    <td>    {$row['City']}          </td>
    <td>    {$row['Role']}          </td>
    </tr>";
    }
}
    echo "</table>";

?>