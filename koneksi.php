<?php
$servername = "localhost";
$username = "root";      // biasanya root kalau lokal
$password = "";          // kosong kalau di lokal default
$dbname = "cuci_mobil"; // nama database sudah kamu buat

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
