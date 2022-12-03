<?php

echo"welcome to multi-dimentional arrays in php: <br><br>";

$multidim = array(array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1));

//echo var_dump ($multidim);

//echo $multidim [1][2];

/*for ($i=0; $i < count ($multidim) ; $i++) { 
    echo var_dump ($multidim[$i]);
    echo "<br>";
}
*/

for ($i=0; $i < count ($multidim) ; $i++) { 
  for($j=0; $j < count ($multidim[$i]) ; $j++){ 
    echo $multidim[$i][$j];
    echo "";
}
echo "<br>";
}
?>
