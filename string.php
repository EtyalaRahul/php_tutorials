<?php 
$name="Rahul";
echo "$name";
echo "<br>";
$name="harryss";
echo strlen($name);
echo "<br>";
echo "The length of string ".strlen($name);
// to count number of words in string
$words="this is my first php";
echo "<br>";
echo str_word_count($words);
echo "<br>";
echo strrev($words);
//string postion
echo "<br>";
echo strpos($words,"my");
//replace 
echo str_replace("is","mega star",$words);
echo "<br>";
//str repeat
echo str_repeat($name,1333);
//trim 
echo "<pre>";
echo ltrim("  rahul is good boy   ");
echo "<br>";
echo ("  rahul is good boy   ");
echo "</pre>";
?>