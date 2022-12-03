<?php

$conn = mysqli_connect("localhost","root","","oneonic") or die ("connection failed");

$sql= "SELECT * FROM employees";
$result = mysqli_query($conn, $sql) or die ("query failed");

$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
/*echo "<pre>";
print_r($row);
echo"</pre>";*/

foreach($row as $data){
    echo $data['EmployeeId']. " " .$data['FirstName']. "" .$data['LastName'] ."<br>";
}


?>