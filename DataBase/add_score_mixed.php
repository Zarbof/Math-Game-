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
 $var_gamemode = "Mixed";

 $score1 = $_COOKIE["Score"];
 $score = ".";
 $score .= "$score1";
//code to select which GameSlot will be added too
 $query = "SELECT Game1, Game2, Game3, Game4, Game5, Game6, Game7, Game8, Game9, Game10
 FROM Stats
 WHERE username = '$var_username' AND Gamemode = '$var_gamemode'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result, MYSQLI_NUM);

 $GameNum = "Game";
 for($i = 0; $i < 11; $i++){
   if($row[$i] === NULL){
     
     $y = $i;
     $y++;
     if($y == 11){    //if database is full, will just overwrite game 1 continuously
       $y = 1;
       $GameNum = "Game{$y}";
       break;
     }
     else{
     $GameNum = "Game{$y}";
     break;
   }
   }

   }

 $sql = "UPDATE Stats
 SET $GameNum ='$score'
 WHERE username='$var_username' AND Gamemode = '$var_gamemode'";

 if ($conn->query($sql) === TRUE) {
     header("Location: ../AddSub Game/addSubGameEnd.html");
 } else {
     echo "Error updating record: " . $conn->error;
 }

 ?>
