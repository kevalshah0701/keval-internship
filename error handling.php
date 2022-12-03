<!DOCTYPE html>
<html>
<body>

<?php

/* Syntax:

error_function(error_level,error_message,
error_file,error_line,error_context)
*/

if(file_exists("mytestfile.txt")) {
  $file = fopen("mytestfile.txt", "r");
} else {
  die("Error: The file does not exist.");
}
?> 

</body>
</html>
