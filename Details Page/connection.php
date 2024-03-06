<?php
$servername = 'localhost';
$username = "root";
$password = "";
$database = "ocs";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection Failed " . $connection->connect_errno);
}

// filhal k lie http://127.0.0.1 likh dia kyuki ye address hai localhost ka  jab websitte host kar do tab apna address dal dena
define("FETCH_SRC", "http://127.0.0.1/Ocs-main/uploads/");
