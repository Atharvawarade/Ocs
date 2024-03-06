<?php
session_start();
$_SESSION['loggedin'] = false;
header("Location: ../Select_user.html");
