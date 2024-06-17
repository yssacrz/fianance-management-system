<?php
$servername = "localhost:4306";
$username = "root";
$password = "";
$database = "finance";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO contact (fullName, email, message) VALUES ('$fullName', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
         
        echo "Thank you for your message!";
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
