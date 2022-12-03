<?php

$conn = mysqli_connect("localhost","root","","oneonic") or die ("connection failed");

$sql= "SELECT * FROM employees";
$result = mysqli_query($conn, $sql) or die ("query failed");



while ($row = mysqli_fetch_row($result)) {
    echo $row['1']." ". $row['2']. "<br><br>";
}

?>