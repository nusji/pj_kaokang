<?php

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "kao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
