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

$uname = $_POST['username'];
$pass  = $_POST['psw'];
$sql = "SELECT * FROM Students WHERE username='$uname'";
$nullVar = NULL;

$qry   = mysqli_query($conn,$sql);
if(!$qry) {
    die("Query Failed: ");
} else {

    $row=mysqli_fetch_array($qry);

    if ($uname==$row['username']) {
        if($uname==$nullVar || $pass==$nullVar) {
          header("Location: loginSystemFalse");
      }
        else if($uname==$row['username'] && $pass==$row['password']) {
          session_start();    //start a session
          $_SESSION['users_name'] = $uname;
           header('Location: loginSystemTrue');
        }
        else {
            header('Location: loginSystemFalse');

        }
    }
}


?>
