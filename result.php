<!doctype html>
<body>
<?php
echo"welcome to page";

function processmarks ($marksarr){
    $sum=0;
        foreach($marksarr as $value){
            $sum += $value;
        }
return $value;
    }
    $ab =[90,95,85,70,75,80]
    $sumMarks = processMarks($ab);
    echo "Total Marks scored by ab out of 600"
?>
</body>
</html>