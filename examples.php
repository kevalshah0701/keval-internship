<?php

$a= 5;
$b= 5;


//Arithmetic operators:


echo "For a+b,The result is :".($a+$b)."<br>";

echo "For a-b,The result is :".($a-$b)."<br>";

echo "For a*b,The result is :".($a*$b)."<br>";

echo "For a/b,The result is :".($a/$b)."<br>";

echo "For a%b,The result is :".($a%$b)."<br>";



//Assignment operators:

$x=$a;

echo "For x,the value is ".$x."<br>";

//comparison operator:

$x=7;
$y=7;

echo "For x == y,The result is: ";
echo  var_dump( $x == $y)."<br>";
echo "<br>";    


//logical operators:

$m =true;
$n =true;

echo "For m and n,The result is ";
echo var_dump($m and $n);
echo "<br>";


echo "For m or n,The result is ";
echo var_dump($m and $n);
echo "<br>";


?>
