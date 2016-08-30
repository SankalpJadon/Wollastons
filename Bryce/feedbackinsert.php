<?php
echo "i am going to insert data here";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wollastons";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	echo "allgood";
	
}

$name = $_POST['name1'];
$email = $_POST['email1'];
$phone = $_POST['phone1'];
$message = $_POST['message1'];

$sql = "INSERT INTO feedback (name, email, phone, message) VALUES ('$name','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>