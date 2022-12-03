<?php
class employee
{
    // Properties 
    public $name;
    public $salary;

    // Methods

    //constructor without argument
    //function  __construct(){
    //echo "This is my constructor for employee ";
    //}

    // constructor with argument 
    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
}


$sk = new employee("sk", 100000);
$harry = new employee("harry", 80000);
$rohan = new employee("rohan", 60000);

echo "The salary of sk is: $sk->salary";
echo"<br>";
echo "The salary of harry is: $harry->salary";
echo"<br>";
echo "The salary of rohan is: $rohan->salary";
echo"<br>";

?>