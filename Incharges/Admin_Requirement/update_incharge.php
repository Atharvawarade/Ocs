<?php
// Assuming you are using PHP to interact with the database
// You would need to replace the database connection details and query accordingly

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../../connection/connection.php";
    // Get form data
    $userId = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $department = $_POST['department'];

    function image_upload($img, $name)
    {
        define("UPLOAD_SRC", $_SERVER['DOCUMENT_ROOT'] . "/Online Clearance System/uploads/Incharges/");
        $tmp_loc = $img['tmp_name'];
        $new_name = $_POST['id'] . $name . random_int(11111, 99999) . ".png";
        $new_loc = UPLOAD_SRC . $new_name;

        if (move_uploaded_file($tmp_loc, $new_loc)) {
            return $new_name; // Return the file name if move is successful
        } else {
            return false; // Return false if move failed
        }
    }
    $image = image_upload($_FILES['image'], $name);
    // $image = $_POST['image'];

    // Update the incharge details in the database
    $sql = "UPDATE `incharges` SET 
            Username = '$username',
            Password = '$password',
            Name = '$name',
            Department = '$department',
            image = '$image'
            WHERE ID = $userId";

    if ($connection->query($sql) === TRUE) {
        include '../../connection/break.php';
        echo '<script>
                    alert("Warning: Incharge Details Updated");
                    window.location.href = "../../Incharges_dashboard/Incharges_Dashboard.php";
              </script>';

        // echo "Incharge details updated successfully!";
    } else {
        echo "Error updating incharge details: " . $connection->error . "Try contacting Developers";
    }

    // Close the database connection
    // include '../../connection/break.php';
} else {
    // Redirect to the form if accessed directly without a POST request
    header("../../Incharges_dashboard/Incharges_Dashboard.php");
    exit();
}
