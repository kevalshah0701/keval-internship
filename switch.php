<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP switch-case Statement</title>
</head>
<body>

<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. go to office.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":j
        echo"Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>

</body>
</html>