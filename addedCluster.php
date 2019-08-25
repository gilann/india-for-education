<?php
$cname = $_POST["name"];
$mandal = $_POST["mandal"];
$state = $_POST["state"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		
$sql = "insert into clusters(cname, mandal, state) 
VALUES ('$cname', '$mandal', '$state')";

if ($conn->query($sql)) {
    header("Location:main.php");
}
?>