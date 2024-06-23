<?php
echo '<h3 style="text-align:center";>welcome to multi demensional arrays tutorial </h3>';

//arrays inside arrays are  called multi dimensional arrays 
$arr = array(
    array(2, 5, 7, 8),
    array(4, 2, 5, 6),
    array(1, 3, 5, 4)
);


echo $arr[0][1];
echo "<br>".var_dump($arr);


for($i=0;$i<count($arr);$i++){
    echo var_dump($arr[$i])."<br>";
}    

//nexted for loop
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j]." ";
    }    
    echo "<br>";
}    
// $arr=array(array(2,5,7,8),array(4,2,5,6),array(1,3,5,4));
// foreach($arr as $value){
        
//         echo "$value";
// }
foreach ($arr as $value) {
    echo implode(", ", $value) . "<br>";  // implode to format the array as a string
}

?>