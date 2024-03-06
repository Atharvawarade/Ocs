<?php
include '../connection/connection.php';
if (isset($_GET['prn'])) {
    $prnParam = $_GET['prn'];
    $sql = "SELECT Name FROM incharges";
    $result = $connection->query($sql); 
    if ($result->num_rows > 0) {
        $names = array();
        while ($row = $result->fetch_assoc()) {
            // Store each name in the array
            $names[] = $row['Name'];
        }
        $FY_HOD_incharge = $names[0];
        $COMP_HOD_incharge = $names[1];
        $MECH_HOD_incharge = $names[2];
        $ELEC_HOD_incharge = $names[3];
        $CIVIL_HOD_incharge = $names[4];
        $FINE_incharge = $names[5];
        $CC_incharge = $names[6];
        $LIB_incharge = $names[7];
        $SPORT_incharge = $names[8]; 
        $TNP_incharge = $names[9];
        $SCHR_incharge = $names[10]; 
        $ACCNT_incharge = $names[11];
    } else {
        echo "0 results";
    }
} else {
    echo "PRN parameter is not set";
}
?>
