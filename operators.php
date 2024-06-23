<?php
//operations in php
//arithemetic operatators
//comparison opeators 
//logical operators
$a=45;
$b=8;
echo "sum of a and b is ".$a+$b. "<br>";
echo $a+$b;
echo "sub of a and b is ".$a-$b. "<br>";
echo $a-$b;
echo "mul of a and b is ".$a*$b. "<br>";
echo $a*$b;
echo "div of a and b is ".$a/$b. "<br>";
echo $a/$b;
echo "modulo of a and b is ".$a%$b. "<br>";
echo $a%$b;
echo "exp of a and is ".$a**$b."<br>";
?>
<?php
$x=$a;
echo "For x ,the value is ".$x."<br>";
$a+=6;
echo "a value is ".$a."<br>";
/* similary 
 -,*,%,*,**/
?>
<?php 
//comparsion operators
$x=7;
$y=6;
echo "for x==y , the result is ";var_dump($x==$y)."<br>";
echo "<br>";
echo "for x!=y , the result is ".($x!=$y)."<br>";
/*
2)>
3)<
*/
?>
<?php
//LOGICAL OPERATIONS
$m=true;
$n=true;
echo var_dump($m and $n); // and can be written as && 
echo var_dump($m or $n);// or can be written as (||);
echo var_dump($m);

?>