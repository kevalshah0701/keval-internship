<?php

class employee
{
    private $name =  "sk";
    private $salary = "70000";
    private $Grade = "1";

    function __showName()
    {
        echo "The name of the employee is: $this->name<br>";
    }
}
// inheriting a new class programmer for employee
class programmer extends employee{
    private $language = "php";
    
    function changelanguage(){
    $this->language = $lang;
    }
}

$sk = new employee();
$sk->name = "sk";
$sk-> showName();

$harry = new employee();
$harry->name = "harry";
$harry-> showName();

$rohan = new programmer();
$rohan->name = "rohan";
echo $rohan->changelanguage("python");
$rohan->showName();
?>