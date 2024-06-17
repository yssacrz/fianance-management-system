<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $database = "finance";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Decode JSON data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract data
    $firstName = $data['firstName'];
    $lastName = $data['lastName'];
    $course = $data['course'];
    $dates = $data['dates'];
    $amount = $data['amount'];

    // Prepare SQL statement
    $sql = "INSERT INTO registered (firstName, lastName, course, dates, amount) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssss", $firstName, $lastName, $course, $dates, $amount);

    // Execute statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
