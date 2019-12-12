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

$sql = "SELECT * FROM Stats WHERE username='$var_username' AND Gamemode = 'Addition'";


$qry  = mysqli_query($conn,$sql);
if(!$qry) {
    die("Query Failed: ");
} else {
    $row=mysqli_fetch_array($qry);



}
?>
