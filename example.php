<?php

class car{
    public $name;
    public $color;


function set_name($name)
{

$this-> name =  $name;

}

function set_color($color)
{

$this-> color =  $color;

}

function get_name()
{
return $this-> name;
}

function get_color()
{
return $this-> color;
}
}

$Thar = new car();
$Thar->set_name('Thar');
$Thar->set_color('black');
echo "Name: " . $Thar->get_name();
echo "<br>";
echo "Color: " .  $Thar->get_color();
?>