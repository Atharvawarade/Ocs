<?php
include "../connection/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user inputs from the form
    $userId = $_POST["userId"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];
    // echo $oldPassword;
    // echo " ";

    // Perform basic server-side validation
    if ($newPassword == $oldPassword) {
        echo "Error: New Password and Confirm Password do not match.";
        exit;
    }
    $Password_query = "SELECT Password FROM `incharges` WHERE ID= $userId";
    $r = mysqli_query($connection, $Password_query);
    $row = mysqli_fetch_assoc($r);
    $fetched_Password = $row['Password'];
    // echo $fetched_Password;

    // Check if the old password matches the stored password
    if ($oldPassword == $fetched_Password) {
        $sql = "UPDATE `incharges` SET `Password` = '$newPassword' WHERE CONCAT(`incharges`.`ID`) = $userId";
        if ($connection->query($sql) === TRUE) {
            echo "done";
            header("Location: ../sidebar/sidebar.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    } else {
        // Old password is incorrect
        echo "Error: Password dosen't match.";
    }
} else {
    // If the request method is not POST, redirect or handle accordingly
    echo "Invalid request method.";
}

include "../connection/break.php";

// SELECT Password FROM `incharges` WHERE ID='11';
// UPDATE `incharges` SET `Password` = 'BIT_ADMIN_ELE' WHERE CONCAT(`incharges`.`ID`) = 4;