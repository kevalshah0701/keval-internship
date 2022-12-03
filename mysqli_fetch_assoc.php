<?php

$conn = mysqli_connect("localhost","root","","oneonic") or die ("connection failed");

$sql= "SELECT * FROM employees";
$result = mysqli_query($conn, $sql) or die ("query failed");

/*echo "<pre>";
print_r($row);
echo"</pre>";
*/

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName']." ". $row['LastName']. "<br><br>";
}

?>