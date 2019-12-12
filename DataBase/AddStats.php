<?php
//point of this is to add the user to the stats page table at the same time as when they make an account

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

//add username as well into secondary stats page at same time

$sql .= "INSERT INTO Stats (username, Gamemode)
VALUES
  ('$var_username', 'Addition'),
  ('$var_username', 'Subtraction'),
  ('$var_username', 'Mixed'),
  ('$var_username', 'Identify')";


if ($conn->multi_query($sql) === TRUE){
    header("Location: ../Log In/index.html");
    //header('Refresh:3; Location: ../index.html');
    echo "Account Created Succesfully";
    exit;

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
