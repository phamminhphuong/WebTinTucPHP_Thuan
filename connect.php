<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webtintucphp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}  
?>
 