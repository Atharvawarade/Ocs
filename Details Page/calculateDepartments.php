<?php
include "../connection/connection.php";
// // Include the database connection file
// $servername = 'localhost';
// $username = "root";
// $password = "";
// $database = "ocs";

// // Create connection
// $connection = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($connection->connect_error) {
//     die("Connection Failed " . $connection->connect_errno);
// }

function calculateTotalDepartments($prn)
{
    global $connection;

    $sql = "SELECT (HOD_status + fine_status + CC_status + Library_HOD_status + Sports_status + TNP_status + Scholarship_status + Accountant_status ) AS totalApprovedDepartments FROM `status` WHERE PRN = $prn";
    $result = $connection->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        return $row['totalApprovedDepartments'];
    }

    return 0; // Default value if no record found
}
