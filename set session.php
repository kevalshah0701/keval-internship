<?php

//use to manage information across different pages
// verify the user info 

session_start();

$_SESSION['username'] = "sk";
$_SESSION['favcat'] = "cars";

echo"we have saved your session successfully ";




?>