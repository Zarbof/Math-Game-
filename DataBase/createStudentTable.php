<?php
$servername = "remotemysql.com";
$username = "ZwypqC96MH";
$password = "Opmx6dzdDM";
$dbname = "ZwypqC96MH";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//$sql = "SELECT * FROM Stats";
$result = mysqli_query($conn,"SELECT * FROM Stats");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Username</th>
<th>Gamemode</th>
<th>Game1 %</th>
<th>Game2 %</th>
<th>Game3 %</th>
<th>Game4 %</th>
<th>Game5 %</th>
<th>Game6 %</th>
<th>Game7 %</th>
<th>Game8 %</th>
<th>Game9 %</th>
<th>Game10 %</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['Gamemode'] . "</td>";
echo "<td>" . $row['Game1'] . "</td>";
echo "<td>" . $row['Game2'] . "</td>";
echo "<td>" . $row['Game3'] . "</td>";
echo "<td>" . $row['Game4'] . "</td>";
echo "<td>" . $row['Game5'] . "</td>";
echo "<td>" . $row['Game6'] . "</td>";
echo "<td>" . $row['Game7'] . "</td>";
echo "<td>" . $row['Game8'] . "</td>";
echo "<td>" . $row['Game9'] . "</td>";
echo "<td>" . $row['Game10'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<html>
<body>
<a href="../Home Page/homePage.html">Click here to go Back</a>
</body>
</html>
