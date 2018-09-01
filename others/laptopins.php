<html>
<head>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PriyankaStudentDB";

//777
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "insert into Laptop(No,Price) values (125515,26490)"; 

if ($conn->query($sql) === TRUE) 
{
    echo "Record Inserted into Laptop successfully!";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>



</body>
</html>
