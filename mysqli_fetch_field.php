<?php

$conn = mysqli_connect("localhost","root","","oneonic") or die ("connection failed");

$sql= "SELECT * FROM employees";
$result = mysqli_query($conn, $sql) or die ("query failed");

//$row = mysqli_fetch_field($result);

while ($field = mysqli_fetch_field($result)) {
echo $field -> name . " " . $field -> max_length. "<br>";
}
?>