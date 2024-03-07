<?php
// Establish a connection to the database
include '../connection/connection.php';
session_start();

// Retrieve department from POST request
$department = $_POST['department'];
// echo $department;
$PRN = $_SESSION['PRN']; // Assuming you have the PRN stored in the session
// echo $PRN;
// Update status to null for the respective department
$sql = "UPDATE status SET $department = NULL WHERE PRN = $PRN"; // Modify this query based on your database schema
// echo $sql;
if ($connection->query($sql) === TRUE) {
    // echo "Status updated successfully";
} else {
    echo "Error updating status: " . $connection->error;
}

// Close the database connection
$connection->close();
