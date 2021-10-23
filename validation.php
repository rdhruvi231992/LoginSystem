<?php

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
$sql = "SELECT * from MyUser where username = '$username' && passwords = '$passwords'";

$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if ($num == 1) {

    header("Location:http://192.168.64.2/login/home.php");
    
exit();
} else {
    header("Location:http://192.168.64.2/login/");
}

$conn->close();

?>