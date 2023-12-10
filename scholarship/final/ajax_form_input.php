<?php
// Server-side function to store form data in the database
function storeFormData($data) {
    // Database connection details
    $servername = "your-servername";
    $username = "your-username";
    $password = "your-password";
    $dbname = "your-database";

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Extract form data
    $fullName = $data['fullName'];
    $email = $data['email'];
    $contactNumber = $data['contactNumber'];
    $college = $data['college'];

    // Prepare and execute an SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO form_data (full_name, email, contact_number, college) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullName, $email, $contactNumber, $college);
    $stmt->execute();

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}

// Check if the form data was received
if (isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['contactNumber']) && isset($_POST['college'])) {
    // Store the form data in the database
    storeFormData($_POST);
}
?>
