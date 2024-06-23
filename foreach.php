<?php
echo "<h1>welcome to the world of for each loop</h1>";
$arr =array("bananas ", "apples","harpic","bread","jamun");
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo "<br>";
}
?>
<?php
//FOR EACH LOOP
foreach($arr as $v)
{
echo $v."<br>";
}


?>