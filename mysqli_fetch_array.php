<?php

$conn = mysqli_connect("localhost","root","","oneonic") or die ("connection failed");

$sql= "SELECT * FROM employees";
$result = mysqli_query($conn, $sql) or die ("query failed");

$row = mysqli_fetch_array($result);
echo "<pre>";
print_r($row);
echo"</pre>";


/*while ($row = mysqli_fetch_array($result)) {
    echo $row['FirstName']." ". $row['LastName']. "<br><br>";
}
*/
?>