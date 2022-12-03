<?php

class Toys
{

    public function __call($name, $sk)
    {
        echo "Magic method invoked while method overloading with object reference<br><br>";
    }

    public static function __callStatic($name, $sk)
    {
        echo "Magic method invoked while method overloading with static access<br>";
    }
}
$objToys = new Toys();
$objToys->overloaded_method();
Toys::overloaded_property();
?>