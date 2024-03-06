<?php
include '../connection/connection.php';

if (isset($_GET['prn'])) {
    $prnParam = $_GET['prn'];
    $sql = "SELECT * FROM status WHERE PRN = $prnParam";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        // Initialize variables with default values
        $HOD_status = "Rejected";
        $fine_status = "Rejected";
        $CC_status = "Rejected";
        $Library_HOD_status = "Rejected";
        $Sports_status = "Rejected";
        $TNP_status = "Rejected";
        $Scholarship_status = "Rejected";
        $Accountant_status = "Rejected";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Assign values based on conditions
            $HOD_status = ($row['HOD_status'] === null || $row['HOD_status'] == 0) ? "Rejected" : "Accepted";
            $fine_status = ($row['fine_status'] === null || $row['fine_status'] == 0) ? "Rejected" : "Accepted";
            $CC_status = ($row['CC_status'] === null || $row['CC_status'] == 0) ? "Rejected" : "Accepted";
            $Library_HOD_status = ($row['Library_HOD_status'] === null || $row['Library_HOD_status'] == 0) ? "Rejected" : "Accepted";
            $Sports_status = ($row['Sports_status'] === null || $row['Sports_status'] == 0) ? "Rejected" : "Accepted";
            $TNP_status = ($row['TNP_status'] === null || $row['TNP_status'] == 0) ? "Rejected" : "Accepted";
            $Scholarship_status = ($row['Scholarship_status'] === null || $row['Scholarship_status'] == 0) ? "Rejected" : "Accepted";
            $Accountant_status = ($row['Accountant_status'] === null || $row['Accountant_status'] == 0) ? "Rejected" : "Accepted";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "PRN parameter is not set";
}
?>
