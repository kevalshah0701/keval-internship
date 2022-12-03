<!DOCTYPE html>
<html>

<head>
   <title> Member Variable Example in PHP </title>
</head>

<body>
   <?php
   class Myclass
   {
      // here the variable $member_variable
      // can be called as member variable
      public static $member_variable = "I am in member variable";
   }
   // now create object of above defined class
   $object_Myclass = new Myclass;
   // now access member variable using object of the class
   echo $object_Myclass::$member_variable;
   ?>
</body>

</html>