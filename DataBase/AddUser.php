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
//add user into main username/password table

session_start();    //start a session
$_SESSION['users_name'] = $_GET[username];    //stores users_name into a session called users_name

$sql = "INSERT INTO Students (username, password)
VALUES ('$_GET[username]', '$_GET[psw]')";
//add username as well into secondary stats page at same time
//$sql .= "INSERT INTO Stats (username) VALUES ('$_GET[username]')";


if ($conn->multi_query($sql) === TRUE){
    header("Location: ./AddStats.php");
    //header('Refresh:3; Location: ../index.html');
    echo "Account Created Succesfully";


    exit;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
