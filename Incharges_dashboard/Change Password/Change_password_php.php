<?php
include "../../connection/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs from the form
    $userId = $_POST["userId"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    // Perform basic server-side validation
    if ($newPassword == $oldPassword) {
        echo "Error: New Password and Confirm Password do not match.";
        exit;
    }
    $Password_query = "SELECT Password FROM `incharges` WHERE ID= $userId";
    $r = mysqli_query($connection, $Password_query);
    $row = mysqli_fetch_assoc($r);
    $fetched_Password = $row['Password'];

    // Check if the old password matches the stored password
    if ($oldPassword == $fetched_Password) {
        $sql = "UPDATE `incharges` SET `Password` = '$newPassword' WHERE CONCAT(`incharges`.`ID`) = $userId";
        if ($connection->query($sql) === TRUE) {
            echo '<script>
                    alert("Warning: Password Changed");
                    window.location.href = "../Incharges_Dashboard.php";
                 </script>';
            exit; // Make sure to exit after the redirection
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    } else {
        // Old password is incorrect
        echo "Error: Password doesn't match.";
    }
} else {
    // If the request method is not POST, redirect or handle accordingly
    echo "Invalid request method.";
}

include "../../connection/break.php";
