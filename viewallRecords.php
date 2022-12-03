<?php

$conn = mysqli_connect("localhost","root","","master") or die ("connection failed");

$sql= "SELECT * FROM author_master";
$result = mysqli_query($conn, $sql) or die ("query failed");

/*echo "<pre>";
print_r($row);
echo"</pre>";
*/

while ($row = mysqli_fetch_assoc ($result)) {
    echo $row['id']." ". $row['name']. "<br><br>";
}
?>