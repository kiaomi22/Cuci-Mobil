<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // default XAMPP
$db   = 'cuci_mobil';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
