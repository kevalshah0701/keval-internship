<?php
class employee {
    public $name;
    public $salary;

    //constructor
    function __construct($name1, $salary1){
        $this->name = $name1;
        $this->salary = $salary1;
    }
// destructor 
    function __destruct(){
        echo "I am destructing $this->name  <br>";
    }

}

$sk = new employee("sk", 100000);
$harry = new employee("harry", 80000);
$rohan = new employee("rohan", 60000);

echo "The salary of sk is: $sk->salary <br>";
echo "The salary of harry is: $harry->salary<br>";
