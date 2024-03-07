<?php
session_start();

// $servername = "localhost"; // Replace with your server name
// $username = "root"; // Replace with your username
// $password = ""; // Replace with your password
// $dbname = "ocs"; // Replace with your database name


include '../connection/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $entered_username = $_POST['Username'];
    $entered_password = $_POST['Password'];

    $sql = "SELECT * FROM incharges WHERE Username = '$entered_username'";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['Password']; // Assuming PRN is the stored password
        $UserID = $row['ID'];
        $Department = $row['Department'];
        echo $stored_password;
        echo $UserID;
        echo $Department;
        // Validate PRN only if the email exists in the database
        if ($entered_password == $stored_password) {
            // Passwords match, login successful
            $_SESSION['loggedin'] = true;
            // $_SESSION['Username'] = $entered_username;//not required
            // $_SESSION['Password'] = $entered_password;//not required t put in session
            $_SESSION['ID'] = $UserID;
            $_SESSION['Department'] =  $Department;
            // echo $_SESSION['ID'];
            // echo $_SESSION['Department'];
            header("Location: ../Incharges_dashboard/Incharges_dashboard.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        header("Location: ../error/invalid_user.html ");
    }

    include '../connection/break.php';
}
