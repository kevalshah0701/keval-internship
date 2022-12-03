<?php

echo"welcome to our page:<br><br>";

// Associative array 

$favcol = array ('a' => 'Red','b' => 'Blue',
                    'c' => 'Black');

foreach ($favcol as $key => $value) {
    echo "<br>Favourite colour of $key is $value";
}
?>