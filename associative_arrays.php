<?php
echo "welcome to assocaitive arrays in php";
//Asociative arrays
$favcol=array( 'shubam'=>'red','rahul'=>'green','raju'=>'blue',7=>'yellow');
echo "<br>";
echo $favcol['shubam']."<br>";
echo $favcol['rahul']."<br>";
echo $favcol[7];
echo "<br>";
foreach($favcol as $key=>$value){
    echo "$key and $value"."<br>";
}
?>