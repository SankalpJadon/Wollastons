<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wollastons";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$muffinName = $_POST['muffin'];
$sql = "UPDATE muffin SET Likes=Likes+1 where MuffinName = '$muffinName';";

$result = $conn->query($sql);

$conn->close();
?>