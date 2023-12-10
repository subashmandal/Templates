<?php
require_once '../../inc/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["fullName"], $_POST["email"], $_POST["contactNumber"], $_POST["college"])) {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $college = $_POST["college"];

    // Perform any necessary validation or sanitization of the form data

    // Insert the form data into the database
    $stmt = $link->prepare("INSERT INTO scholarship_leads (fullName, email, contactNumber, college) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $fullName, $email, $contactNumber, $college);
    $stmt->execute();

    // Handle success or error response
    if ($stmt->affected_rows > 0) {
        // Successful insertion
        echo 'Data inserted successfully';
    } else {
        // Failed insertion
        echo 'Data insertion failed';
    }

    $stmt->close();
}

$link->close();
?>
