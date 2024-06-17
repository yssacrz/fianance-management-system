<?php
$servername = "%";
$username = "admin";       
$password = "admin1914";            
$dbname = "finance";       

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
