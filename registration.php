<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$username =$_POST['user'];
$passwords = $_POST['password'];

$sql = "INSERT INTO MyUser (username,passwords)
VALUES ('$username', '$passwords')";

if ($conn->query($sql) === TRUE) {
    header("Location:http://192.168.64.2/login/");
    
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>