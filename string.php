<?php 

$name=  "sk";
echo $name;
echo "<br>";

echo"The length of my string is :". strlen($name);
echo "<br>";

echo "The words in Name is :".str_word_count ($name); 
echo "<br>";

echo strrev ($name);//for use reverse a word 
echo "<br>";

echo strpos ($name,"sk");
echo "<br>";

echo str_replace ("sk", "keval",$name);
echo "<br>";

echo str_repeat($name,5);
echo "<br>";



?>