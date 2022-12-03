<?php
echo"welcome to variables in php:<br><br>";
$a = 98;   // global variable 
$b = 9;

function printvalue(){
    $a =97;  // local variable 
    global $a,$b;   //give me to access global variables 
    $a=100;
    $b=1000;
    echo"<br> The value of Your variable a is $a and b is $b";
}

echo $a;   
printvalue();
echo"<br> The value of Your variable a is $a and b is $b";
echo"<br>";
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>
