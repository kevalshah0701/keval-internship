<?php  
class person  
{  
public $name;  
public $age;  
function __construct($n, $a)  
{  
$this->name=$n;  
$this->age=$a;  
}  
public function setAge($ag)  
 {  
   
$this->ag=$ag;  
   
}  
   
public function display()  
   
{  
   
echo  "welcome to our website " .$this->name.".<br><br>";  
   
return $this->age-$this->ag;  
   
}  
   
}  
   
$person=new person("sk",21);  
   
$person->setAge(1);  
   
echo "You are ".$person->display()." years old.";  
   
?>  
