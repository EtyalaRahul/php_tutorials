<?php
echo '<h2 style="text-align:center;">
 welcome to global variables tutorial</h2>
';
$a=90;
echo $a;
function name($vaiable){
echo "<br>"."Your name is $vaiable";
}

 $name="rahul";
name($name);

$a=20;
$b=233;
function dsjds()
{
    global $a,$b;
    $a=122;
    $b=23324;
}
//after calling this functions only values will be changed other no change milegha bhaiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii..........................................
dsjds();
echo "<br>"."$a and $b";
echo var_dump($GLOBALS);
echo "<br>"."<br>";
echo var_dump($GLOBALS["a"]);
?>