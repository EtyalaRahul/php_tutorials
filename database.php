<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful<br>";

// Create database
$sql = "CREATE DATABASE dbvinayss";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Database created successfully<br>";
} else {
    echo "Database failed to create: " . mysqli_error($conn) . "<br>";
}

// Select the newly created database
mysqli_select_db($conn, 'dbvinay');

// Create table
$sql_table = "CREATE TABLE rahul (
    id INT NOT NULL,
    name VARCHAR(20),
    role VARCHAR(23)
    primary key(id)
);";
$result = mysqli_query($conn, $sql_table);
if (!$result) {
    echo "Table created successfully<br>";
} else {
    echo "Table creation failed: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>
