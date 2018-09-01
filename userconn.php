<html>
<head>
	<title>Welcome!</title>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
</head>
<body>
	<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Hey there new user!</h1>
                <hr>


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
// sql to create table
$sql = "insert into Users(Uname, Pwd, Name, Dob, Email) values ('$_POST[uname]', '$_POST[pwd]', '$_POST[name]', '$_POST[dob]', '$_POST[email]')"; 
//$sql = "insert into Users(Uname, Pwd, Name, Dob, Email) values ('priyanka1706','swallet','Priyanka C', '17/06/1997', 'priyankachandrashekhar@yahoo.in')"; 

if ($conn->query($sql) === TRUE) 
{
    echo "<p>Sign Up Successful!</p>";
} 
else 
{     echo "Error: " . $sql . "<br>" . $conn->error; }
$conn->close();
?>
				<p><br>Welcome to the Blue Alchemy family!</p>
                <a href="BAH.html" class="btn btn-primary btn-xl page-scroll">Back to Home</a>
            </div>
        </div>
    </header>
</body>
</html>