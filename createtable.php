<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbrahul";
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection was successful <br>";

// SQL statement to create table
$sql = "CREATE TABLE `rahuls` (
    `id` INT(6) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    `dest` VARCHAR(44) NOT NULL,
    PRIMARY KEY (`id`)
    insert into rahuls(12,'etyalarahul','hyd')
)";
$// Execute SQL statement to create table
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     echo "Table 'rahuls' created successfully <br>";
// } else {
//     echo "Error creating table: " . mysqli_error($conn) . "<br>";
// }

// SQL statement to insert data
$insert_sql = "INSERT INTO `rahuls` (`id`, `name`, `dest`) VALUES (12, 'etyalarahul', 'hyd')";

// Execute SQL statement to insert data
$insert_result = mysqli_query($conn, $insert_sql);

if ($insert_result) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
