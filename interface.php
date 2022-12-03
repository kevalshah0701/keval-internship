<!DOCTYPE html>
<html>
<body>

<?php
interface vehicle {
  public function drive();
}

class car implements vehicle {
  public function drive() {
    echo "I swear you’ll fear on Fortuner’s last gear. 😬";
  }
}
$vehicle = new car();
$vehicle->drive();
?>
 
</body>
</html>
