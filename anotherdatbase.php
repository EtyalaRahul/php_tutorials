<?php
$servername="localhost";
$username="root";
$password="";
$database="phptut";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die ("Connection failed ".mysqli_connect_error($conn));
}
echo "Connection successfully";
$sql="create database PHPTUT";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "the db was created successully";
}
else{
    echo "The db was not created scucessully".mysqli_error($conn);
}
$sql= "CREATE TABLE IF NOT EXISTS `rahul` (
    `id` INT AUTO_INCREMENT,
    `name` VARCHAR(34) NOT NULL,
    `role` VARCHAR(34) NOT NULL,
    `doj` DATE,
    PRIMARY KEY (`id`)
);";
$result2 = mysqli_query($conn, $sql);

if ($result2) {
    echo "Table created successfully<br>";
} else {
    echo "Table creation failed: " . mysqli_error($conn) . "<br>";
}
?>