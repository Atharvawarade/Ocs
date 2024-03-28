<?php
// Check if the form is submitted
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "ocs"; // Replace with your database name

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish a connection to the database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $middlename = $lastname = $college_email = $phone_no = $Year_of_Study = $Branch = $Section = $Year_of_graduation = $PRN = $Enrollment_No = $Date_of_Birth = $Place_of_Birth = $Nationality = $Last_college_attended_prior_to_BIT = $Academic_year_of_admission_in_BIT = $Religion = $Category = $Reason_for_TC = $Caution_Money_Status = "";

    // Set variables based on form input
    if (isset($_POST['Firstname'])) {
        $firstname = $_POST['Firstname'];
    }
    if (isset($_POST['Middlename'])) {
        $middlename = $_POST['Middlename'];
    }
    if (isset($_POST['Lastname'])) {
        $lastname = $_POST['Lastname'];
    }
    if (isset($_POST['college_email'])) {
        $college_email = $_POST['college_email'];
    }
    if (isset($_POST['phone_no'])) {
        $phone_no = $_POST['phone_no'];
    }
    if (isset($_POST['Year_of_Study'])) {
        $Year_of_Study = $_POST['Year_of_Study'];
    }
    if (isset($_POST['Branch'])) {
        $Branch = $_POST['Branch'];
    }
    if (isset($_POST['Section'])) {
        $Section = $_POST['Section'];
    }
    if (isset($_POST['Year_of_graduation'])) {
        $Year_of_graduation = $_POST['Year_of_graduation'];
    }
    if (isset($_POST['PRN'])) {
        $PRN = $_POST['PRN'];
    }
    if (isset($_POST['Enrollment_No'])) {
        $Enrollment_No = $_POST['Enrollment_No'];
    }
    if (isset($_POST['Date_of_Birth'])) {
        $Date_of_Birth = $_POST['Date_of_Birth'];
    }
    if (isset($_POST['Place_of_Birth'])) {
        $Place_of_Birth = $_POST['Place_of_Birth'];
    }
    if (isset($_POST['Nationality'])) {
        $Nationality = $_POST['Nationality'];
    }
    if (isset($_POST['Last_college_attended_prior_to_BIT'])) {
        $Last_college_attended_prior_to_BIT = $_POST['Last_college_attended_prior_to_BIT'];
    }
    if (isset($_POST['Academic_year_of_admission_in_BIT'])) {
        $Academic_year_of_admission_in_BIT = $_POST['Academic_year_of_admission_in_BIT'];
    }
    if (isset($_POST['Religion'])) {
        $Religion = $_POST['Religion'];
    }
    if (isset($_POST['Category'])) {
        $Category = $_POST['Category'];
    }
    if (isset($_POST['Reason_for_TC'])) {
        $Reason_for_TC = $_POST['Reason_for_TC'];
    }
    if (isset($_POST['Caution_Money_Status'])) {
        $Caution_Money_Status = $_POST['Caution_Money_Status'];
    }

    // Function to upload image
    function image_upload($img, $PRN)
    {
        define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/Ocs/uploads/");

        $tmp_loc = $img['tmp_name'];
        $new_name = $PRN . random_int(11111, 99999) . $_POST['Branch'] . $_POST['Section'] . $_POST['Year_of_graduation'] . $img['name'];
        $new_loc = UPLOAD_SRC . $new_name;

        if (move_uploaded_file($tmp_loc, $new_loc)) {
            return $new_name; // Return the file name if move is successful
        } else {
            return false; // Return false if move failed
        }
    }

    // Check if image is uploaded and move it after successful insertion into the database
    if (isset($_FILES['ProPhoto']) && $_FILES['ProPhoto']['error'] === 0) {
        // SQL query to insert data into the 'student' table
        $sql = "INSERT INTO student (Firstname, Middlename, Lastname, college_email, mobile, Year_of_Study, Branch, Section, Year_of_grad, PRN, Enrollment_no, DOB, POB, Nationality, `L-Clg`, YOAdm, religion, category, `desc`,CauMonStatus,ProfilePhoto)
            VALUES ('$firstname', '$middlename', '$lastname', '$college_email', '$phone_no', '$Year_of_Study', '$Branch', '$Section', '$Year_of_graduation', '$PRN', '$Enrollment_No', '$Date_of_Birth', '$Place_of_Birth', '$Nationality', '$Last_college_attended_prior_to_BIT', '$Academic_year_of_admission_in_BIT', '$Religion', '$Category', '$Reason_for_TC', '$Caution_Money_Status', '')";

        if ($conn->query($sql) === TRUE) {
            // Move the image now that the database insertion was successful
            $image_path = image_upload($_FILES['ProPhoto'], $PRN);
            if ($image_path) {
                // Update the ProfilePhoto field with the image path
                $sql_update = "UPDATE student SET ProfilePhoto = '$image_path' WHERE PRN = '$PRN'";
                if ($conn->query($sql_update) === TRUE) {
                    echo "New record created successfully.";
                    header("Location: ../login_student.html");
                    exit();
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            } else {
                echo "Cannot move the file.";
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "You are supposed to upload a photo. \n";
    }

    // Close the database connection
    $conn->close();
}
?>

<!-- // $trigger = "DELIMITER //

// CREATE TRIGGER insert_into_status
// AFTER INSERT ON student
// FOR EACH ROW
// BEGIN
// INSERT INTO status (PRN, name, Branch, Year_of_grad, Section)
// VALUES (NEW.PRN, CONCAT(NEW.Firstname,' ',NEW.Middlename,' ', NEW.Lastname), NEW.Branch, NEW.Year_of_grad, NEW.Section);
// END;
// //

// DELIMITER "; -->