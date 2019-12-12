<?php
$servername = "remotemysql.com";
$username = "ZwypqC96MH";
$password = "Opmx6dzdDM";
$dbname = "ZwypqC96MH";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Stats (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
Gamemode VARCHAR(30) NOT NULL,
Game1 VARCHAR(6) NOT NULL,
Game2 VARCHAR(6) NOT NULL,
Game3 VARCHAR(6) NOT NULL,
Game4 VARCHAR(6) NOT NULL,
Game5 VARCHAR(6) NOT NULL,
Game6 VARCHAR(6) NOT NULL,
Game7 VARCHAR(6) NOT NULL,
Game8 VARCHAR(6) NOT NULL,
Game9 VARCHAR(6) NOT NULL,
Game10 VARCHAR(6) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
