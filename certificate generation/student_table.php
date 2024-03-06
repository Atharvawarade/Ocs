<?php
        include '../connection/connection.php';
        if (isset($_GET['prn'])) {
            // Retrieve the PRN value from the URL
            $prnParam = $_GET['prn'];
            $sql = "SELECT * FROM student WHERE PRN = $prnParam"; // Modify this query based on your database schema
            $result = $connection->query($sql);
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
              // Extract data from the database and assign it to variables
              $firstname = $row['Firstname'];
              $middlename = $row['Middlename'];
              $lastname = $row['Lastname'];
              $college_email = $row['college_email'];
              $phone_no = $row['mobile'];
              $Year_of_Study = $row['Year_of_study'];
              $Branch = $row['Branch'];
              $Section = $row['Section'];
              $Year_of_graduation = $row['Year_of_grad'];
              $PRN = $row['PRN'];
              $Enrollment_No = $row['Enrollment_no'];
              $Date_of_Birth = $row['DOB'];
              $Place_of_Birth = $row['POB'];
              $Nationality = $row['Nationality'];
              $Last_college_attended_prior_to_BIT = $row['L-Clg'];
              $Academic_year_of_admission_in_BIT = $row['YOAdm'];
              $Religion = $row['religion'];
              $Category = $row['category'];
              $Reason_for_TC = $row['desc'];
              $Caution_Money_Status = $row['CauMonStatus'];
            }
        } 
        else {
        echo "no prn fetched";
        }
        // Close the database connection
        $connection->close();
?>