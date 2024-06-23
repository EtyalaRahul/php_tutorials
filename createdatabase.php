<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="dbrahul";
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successful <br>";
// Create database
$sql = "CREATE DATABASE dbrahul";
$result = mysqli_query($conn, $sql);

// Check if database creation was successful
if ($result) {
    echo "Database created successfully <br>";
} else {
    echo "Failed to create database: " . mysqli_error($conn);
}
?>
