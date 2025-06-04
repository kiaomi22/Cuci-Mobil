<?php
$servername = "localhost";
$username = "root";  // sesuaikan username mysql kamu
$password = "";      // sesuaikan password mysql kamu
$dbname = "cuci_mobil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
