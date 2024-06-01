<?php
$servername = "localhost";
$username = "root"; // update as needed
$password = ""; // update as needed
$dbname = "login_form"; // ensure this database exists

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
