<?php
echo "welcome to connecting to database";

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
$sql="CREATE DATABASE  etyalarahul";
$result=mysqli_quert($conn,$sql);
if(!$conn){
    die("sorry we failed to connect".mysqli_connect_error());
}

else{
    echo "connection was successful";

}




?>