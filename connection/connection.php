<?php
$servername = 'localhost';
$username = "root";
$password = "";
$database = "ocs";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    header('Location:../error/NotFound.html');
    die("Connection Failed " . $connection->connect_errno);
}
