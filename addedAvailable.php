<?php
$rname = $_POST["name"];
$fromtime = $_POST["from_time"];
$totime = $_POST["to_time"];

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
		
$sql = "insert into available_resources(sid, rname, fromtime, totime) 
VALUES ('1', '$rname', '$fromtime', '$totime')";

if ($conn->query($sql)) {
    header("Location:main.php");
}
?>