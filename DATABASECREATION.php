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

// Check if the database exists
$db_check = mysqli_query($conn, "SHOW DATABASES LIKE 'dbrahul'");
if (mysqli_num_rows($db_check) == 0) {
    // Create database if it does not exist
    $sql = "CREATE DATABASE dbrahul";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Database created successfully<br>";
    } else {
        die("Database creation failed: " . mysqli_error($conn) . "<br>");
    }
} else {
    echo "Database already exists<br>";
}

// Select the database
if (!mysqli_select_db($conn, 'dbrahul')) {
    die("Database selection failed: " . mysqli_error($conn) . "<br>");
}

// Create table
$sql_table = "CREATE TABLE IF NOT EXISTS rahulssss (
    id INT NOT NULL,
    name VARCHAR(20),
    role VARCHAR(23)
);";
$result2 = mysqli_query($conn, $sql_table);

if ($result2) {
    echo "Table created successfully<br>";
} else {
    echo "Table creation failed: " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>
