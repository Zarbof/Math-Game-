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
//add users name into a variable to be added to second table
session_start();
$var_username = $_SESSION['users_name'];
$var_gamemode = $_COOKIE['GM'];
$score = $_COOKIE["Score"];
$GameScore = "Game";

//code to select which GameSlot will be added too



printf ("%s (%s)\n", $var_gamemode, $var_username);

?>
