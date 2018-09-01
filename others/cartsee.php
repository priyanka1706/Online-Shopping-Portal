<html>
<head>
	<title>Progress-Budget</title>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PriyankaStudentDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT No,Price from Cart";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
	 echo "<table>";
     echo "<tr><td><b>No</b></td><td><b>Price</b></td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["No"]. "</td><td>" . $row["Price"]. "</td></tr> ";
	 }
	 echo "</table>";
} else {
     echo "0 results";
}
$conn->close();


?>
</body>
</html>