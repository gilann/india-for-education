<?php
$cname = $_POST["name"];
$mandal = $_POST["mandal"];
$state = $_POST["state"];
$subject = $_POST["subject"];
$resource = $_POST["resource"];
$contact = $_POST["contact"];

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
		
$sql = "insert into volunteer(name, mandal, state, subject, resource, contact) 
VALUES ('$cname', '$mandal', '$state', '$subject', '$resource', '$contact')";

if ($conn->query($sql)) {
    header("Location:main.php");
}
?>