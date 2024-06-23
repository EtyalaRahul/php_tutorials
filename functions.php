<?php

echo '<h3 style="text-align:center;">Welcome to tutorials on functions </h3>';


function processmarks($arr){
    $sum=0;
    foreach($arr as $marks){
        $sum+=$marks;
    }
    return $sum;
}
$rahul=[12,12,32,23,213];
$summarks=processmarks($rahul);
echo $summarks;
echo "<br>";
$harry=[100,100,100,100,100,101];
$summarks=round(processmarks($harry)/6,2);
echo $summarks;
?>