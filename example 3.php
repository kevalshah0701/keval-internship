<!DOCTYPE html>
<html>
<body>

<?php
class car {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$thar = new car();
var_dump($thar instanceof car);
?>
 
</body>
</html>