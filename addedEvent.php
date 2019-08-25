<?php
$agenda = $_POST["agenda"];
$cluster = $_POST["cluster"];
$place = $_POST["place"];

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

$sql = "insert into events(cid, agenda, place)
VALUES ('1', '$agenda', '$place')";

if ($conn->query($sql)) {
    header("Location:main.php");
}
?>
