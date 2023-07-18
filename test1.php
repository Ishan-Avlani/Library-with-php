<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection details
    $hostname = 'localhost';
    $username = 'root';
    $password_db = '';
    $database = 'library';

    // Create a new mysqli object and establish the database connection
    $conn = new mysqli($hostname, $username, $password_db, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the INSERT statement
    $stmt = $conn->prepare("INSERT INTO testing (name, email, password) VALUES (?, ?, ?)");

    // Bind parameters to the statement
    $stmt->bind_param("sss", $name, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        // Display success message
        echo "Registration successful!";
    } else {
        // Display error message
        echo "Error in inserting data: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
